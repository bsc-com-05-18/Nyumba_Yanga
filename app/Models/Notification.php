<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
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
    public function getReadAttribute($value)
    {
        return $value ? 'Read' : 'Unread';
    }
    public function scopeUnread($query)
    {
        return $query->whereNull('read_at');
    }
}