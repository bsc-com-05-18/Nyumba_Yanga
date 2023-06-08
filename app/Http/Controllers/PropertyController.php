<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;


class PropertyController extends Controller
{
    public function index()
    {
       
        return view('landlord.image-upload');
    }
    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required',
            'size' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15000',
        ]);
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Property::insert([

            'user_id' => \Auth::guard('web')->user()->id,
            'title' => $request->title,
            'location' => $request->location,
            'price' => $request->price,
            'description' => $request->description,
            'size' => $request->size,
            'address' => $request->address,
            'image'=> $imageName,
        ]);
        return back()->with('success','Added');

    }




    public function display()
    {
        $user = \Auth::user();

        $landlords = Property::where('user_id',$user->id)->count();
        $properties = Property::where('user_id',$user->id)->get();
        return view('landlord.myproperties',compact('properties','user','landlords'));
    }
    
    public function images(){

        $user = \Auth::user();


        $properties = Property::where('user_id',$user->id)->get();
        
        return view('landlord.images',compact('properties','user'));
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
        $property->image = $request->image;

        $property->update();
        return redirect()->route('landlord.myproperties', $property->id);


    }

    public function removeProperty($id){
        $property = Property::find($id);
        $property ->delete($id);
        return redirect()->route('landlord.myproperties', $property->id);

        
        
    


    }
}
