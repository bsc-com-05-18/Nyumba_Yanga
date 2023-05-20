<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Image;

class PropertyController extends Controller
{

        //showing property to the landlord dashbord
    public function index()
    {
        $data = Image::all();
        return view('landlord.myproperties', compact('data'));
    }

            //getting update form
     public function updateform($id)

     {
         $property = Image::find($id);
         return view('landlord.editproperties',compact('property'));
     }
     
           // storing updated property into database
     public function update(Request $request,$id){
         $property = Image::find($id);
         $property->title = $request->title;
         $property->location = $request->location;
         $property->description = $request->description;
         $property->price = $request->price;
         $property->update();
         return redirect()->route('landlord.myproperties', $property->id);
     }


           //delete or remove property by landlord
     public function removeProperty($id){
        $property = Image::find($id);
        $property ->delete($id);
        return redirect()->route('landlord.myproperties', $property->id);

        
    }



}
