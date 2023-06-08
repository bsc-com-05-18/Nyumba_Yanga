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
        $properties = Property::all();
        return view('landlord.property_upload',compact('properties'));
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
            'image'=> implode('|', $image),
        ]);
        return back()->with('success','Added');
    }
}
