<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];

   public function property(){
    return $this->belongsTo(Property::class);
   }
   public function user(){
    return $this->belongsTo(User::class, 'email', 'email');
   }
   public function notificataions() 
   {
    return $this->hasOne(BookNotifications::class);
   }
}
