<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
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
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        $image = new Image();
        $image->title = $request->title;
        $image->location = $request->location;
        $image->description = $request->description;
        $image->price = $request->price;
        $image->image = $imageName;
        $image->save();

        return redirect()->route('landlord.myproperties', $image->id);
    }
<<<<<<< HEAD
    
=======

>>>>>>> 51972f69a7b3c113d56086794747302542085c3e

}
