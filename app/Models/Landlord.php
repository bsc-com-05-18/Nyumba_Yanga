<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Landlord extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'landlord';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'acc_number',
        'password',
    ];

    public function properties(){
        return $this->hasMany(Property::class);
    }
    public function users(){
        return $this->hasMany(User::class);
    }
    public function bookings(){
        return $this->hasManyThrough(Booking::class, Property::class, 'user_id', 'property_id');
    }
    public function notifications(){
        return $this->hasMany(Notification::class);
    }
    public function reports(){
        return $this->hasMany(MaintenanceReports::class);
    }
    public function maintenance_reports(){
        return $this->hasMany(MaintenanceReport::class);
    }

    public function unreadNotifications(){
        return $this->hasMany(Notification::class)->where('read', false);
    }
    public function requestNotifications(){
        return $this->hasMany(BookNotifications::class);
    }
    public function unreadBookNotifications(){
        return $this->hasMany(BookNotifications::class)->where('read', false);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
