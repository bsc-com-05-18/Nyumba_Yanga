<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    //adding prdouct method
    public function index(){


        return view('landlord.productUpload');

    }

    //addproperties
    public function saveproduct(Request $request){
           $property= new Product();
           
           if($request->hasFile('image')){
             $file=$request->file('image');
             $ext=$file->getClientOriginalExtension();
             $imagename=time().'.'.$ext;
             $file->move('productimage',$imagename);
             $property->image=$imagename;
           }

           $property->name=$request->input('name');
           $property->price=$request->input('price');
           $property->location=$request->input('location');
           $property->description=$request->input('description');
           
           $property->save();
           return  redirect('/editproperties')->with('success', 'Project aangepast');


    }
     //retrieve prdouct method
      // public function displayProduct(){
      //   $product=Product::all();
         
      //   return view('landlord.display',compact('product'));

      // }

    



      public function viewProductDetails(){
        return('viewProperties');

      }

      //display product tabe
      public function editProductTable(){
        $pro=Product::all();
        return view('landlord.displayProperties',compact('pro'));

      }

      //display product page for editing
       public function product($id){
        $pro=Product::find($id);
        return view ('landlord.editproductpage',compact('pro'));
        
       }

       //send updated data to properties table
       public function updated(Request $request,$id){
        $pro=Product::find($id);
        $pro->name=$request->input('name');
        $pro->price=$request->input('price');
        $pro->location=$request->input('location');
        $pro->description=$request->input('description');

        $pro->update();
        return  redirect('/')->with('success', 'Project aangepast');

       }

       // delete property method
       public function removeProperty($id){
        $pro=Product::find($id);
          $pro->delete($id);
          return  redirect('/')->with('success', 'Project aangepast');
       }


      

}
