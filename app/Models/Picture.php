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
       
        return view('landlord.property_upload');
    }
    public function store(Request $req){

        $image = array();
        if($files = $req->file('image')){
            foreach ($files as $file) 
            {
                $image_name = md5(rand(1000,10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/images/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        
        Property::insert([

            'user_id' => \Auth::guard('web')->user()->id,
            'title' => $req->title,
            'location' => $req->location,
            'price' => $req->price,
            'description' => $req->description,
            'size' => $req->size,
            'address' => $req->address,
            'image'=> implode('|', $image),
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
}
