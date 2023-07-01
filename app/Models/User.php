<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'occupation',
        'password',
    ];

    public function landlord(){
        return $this->belongsTo(Landlord::class);
       }
    public function assignments(){
    return $this->hasMany(Assignment::class);
    }
    public function reviews(){
    return $this->hasMany(Rating::class);
    }
    public function reports(){
        return $this->hasMany(MaintenanceReport::class);
    }
    public function notifications(){
        return $this->hasMany(Notification::class);
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
