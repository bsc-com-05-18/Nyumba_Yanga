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
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
            'size' => 'required',
            'address' => 'required',
            'type' => 'required',
            'status' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ]);

        $property = new Property();
        $property->landlord_id = \Auth::guard('landlord')->user()->id;
        $property->title = $request->title;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->address = $request->address;
        $property->type = $request->type;
        $property->status = $request->status;

        $images = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $imageName = time(). '-' . $index . '-' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $images[] = $imageName;
               
            }
        }
        for ($i = 1; $i <= 5; $i++) {
            $imageField = 'image' . $i;
            if (isset($images[$i - 1])) {
                $property->$imageField = $images[$i - 1];
            }
        }
        $property->save();


        return redirect()->back()->with('success', 'Property uploaded successfully!');
    }   

    public function display()
    {
        $properties = Property::where('landlord_id', \Auth::guard('landlord')->user()->id)->paginate(5);
        return view('landlord.myproperties',compact('properties'));
    }    
    
    public function editForm(Request $request, $id){
        $property = Property::find($id);
        $property->title = $request->input('title');
        $property->location = $request->input('location');
        $property->description = $request->input('description');
        $property->price = $request->input('price');
        $property->size = $request->input('size');
        $property->address = $request->input('address');
        $property->type = $request->input('type');
        $property->status = $request->input('status');

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('images');
                $images[] = $path;
            }
            $property->images = $images;
        }
        $property->save();
        return redirect()->back()->with('success', 'Property edited successfully!');

    }

    public function removeProperty($id){
        $property = Property::find($id);
        $property ->delete($id);
        return redirect()->route('landlord.myproperties');
    }

    public function viewImages($id){

        $properties = Property::where('landlord_id', \Auth::guard('landlord')->user()->id)->get();
        return view('landlord.property-images',compact('properties'));
    }
    

}
