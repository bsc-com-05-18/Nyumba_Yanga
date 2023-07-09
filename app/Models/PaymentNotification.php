<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentNotification extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function landlord(){
        return $this->belongsTo(Landlord::class);
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
