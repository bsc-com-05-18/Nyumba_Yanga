<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public function landlord(){
        return $this->belongsTo(Landlord::class);
       }
       public function user(){
        return $this->belongsTo(User::class, 'user_id');
       }
       public function property(){
        return $this->belongsTo(Property::class, 'property_id');
       }
}
