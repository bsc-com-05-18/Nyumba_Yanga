<?php

namespace App\Models;
use App\Http\Controllers\Auth;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function user(){
    return $this->belongsTo(User::class);
   }
}
