<?php

namespace App\Models;
use App\Http\Controllers\Auth;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function landlord(){
    return $this->belongsTo(Landlord::class);
   }
   public function tenant(){
    return $this->belongsTo(Landlord::class);
   }
   public function assignments(){
    return $this->hasMany(Assignment::class);
   }
   public function reviews(){
    return $this->hasMany(Rating::class);
   }
   public function maintenance_reports(){
    return $this->hasMany(MaintenanceReport::class);
}
public function notifications(){
    return $this->hasMany(Notification::class);
}
   public function bookings(){
    return $this->hasMany(Booking::class);
   }
}
