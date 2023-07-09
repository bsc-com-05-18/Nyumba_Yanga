<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function landlord(){
        return $this->belongsTo(Landlord::class);
       }
       public function user(){
        return $this->belongsTo(User::class, 'user_id');
       }
       public function property(){
        return $this->belongsTo(Property::class, 'property_id');
       }
       public function paymentNotification()
       {
           return $this->belongsTo(PaymentNotification::class, 'payment_id');
       }
}
