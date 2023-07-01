<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\MaintenanceReport;
use App\Models\Property;
use App\Models\User;
use App\Models\Landlord;
use App\Models\Booking;
use App\Models\Notification;
use App\Models\Assignment;
use Illuminate\Http\Request;

class MaintenanceReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tenant = \Auth::guard('web')->user();
        $houses = $tenant->assignments()->with('property.landlord')->first();
        return view('maintenance_report', compact('tenant', 'houses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tenant = \Auth::guard('web')->user();
        $houses = $tenant->assignments()->with('property.landlord')->first();

        $house = $houses->property->id;

        $request->validate([
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $maintenanceReport = MaintenanceReport::create([
            'user_id' => \Auth::guard('web')->user()->id,
            'property_id' => $house,
            'description' => $request->input('description'),
            'image'=> $imageName,
        ]);

        //sending notification to landlord
        $tenant = \Auth::guard('web')->user();
        $houses = $tenant->assignments()->with('property.landlord')->first();

        $landlord = $houses->property->landlord->id;
        $propertyId = $houses->property->id;

        if ($landlord) {
            $notification = new Notification();
            $notification->user_id = $tenant->id;
            $notification->landlord_id = $landlord;
            $notification->property_id = $propertyId;
            $notification->message = 'You have a maintenance report from';
            
            $notification->save();
        }

        return redirect()->back()->with('success', 'Maintenance report submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
