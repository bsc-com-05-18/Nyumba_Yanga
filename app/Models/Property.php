<?php

namespace App\Models;
use App\Http\Controllers\Auth;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function user(){
    return $this->belongsTo(Landlord::class);
   }
   public function bookings(){
    return $this->hasMany(Booking::class);
   }
}
