<?php

namespace App\Http\Controllers\Landlord;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{
   public function upload(Request $request)
   {
        $path = $request->file('image')->store('public/images');
        $image = new Image;
        $image->path = $path;
        $image->save();
        return redirect()->back();
   }
}
