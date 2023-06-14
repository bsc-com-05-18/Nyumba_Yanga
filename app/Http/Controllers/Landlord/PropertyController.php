<?php

namespace App\Http\Controllers\Landlord;
use App\Http\Controllers\Landlord\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Landlord;


class PropertyController extends Controller
{

    //upload property
    public function create()
    {
        return view('landlord.image-upload');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
            'size' => 'required',
            'address' => 'required',
            'type' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            // 'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            // 'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            // 'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            // 'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:15000',
            // 'image6' => 'image|mimes:jpeg,png,jpg,gif,svg|max:15000',

        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Property::insert([

            'user_id' => \Auth::guard('landlord')->user()->id,
            'title' => $request->title,
            'location' => $request->location,
            'price' => $request->price,
            'description' => $request->description,
            'size' => $request->size,
            'address' => $request->address,
            'type' => $request->type,
            'status' => $request->status,
            'image'=> $imageName,
        ]);

        return redirect()->back();
    }

    public function display()
    {

        $properties = Property::where('user_id', \Auth::guard('landlord')->user()->id)->paginate(5);
        return view('landlord.myproperties',compact('properties'));
    }

    public function updateform($id)

    {
        $property = Property::find($id);
        return view('landlord.editproperties',compact('property'));
    }

    public function update(Request $request,$id){
        $property = Property::find($id);
        $property->title = $request->title;
        $property->location = $request->location;
        $property->price = $request->price;
        $property->description = $request->description;
        $property->size = $request->size;
        $property->address = $request->address;
        // $property->image = $request->image;


        $property->update();
        return redirect()->route('landlord.myproperties');



    }

    public function removeProperty($id){
        $property = Property::find($id);
        $property ->delete($id);
        return redirect()->route('landlord.myproperties');
    }
    

}
