<?php

namespace App\Models;

use App\Models\Client;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'email',
        'password',
    ];

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

    public function address() {
        return $this->hasMany(Address::class);
    }

    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function permission() {
        return $this->hasManyThrough(Permission::class, Profile::class);
    }

    public function order() {
        return $this->hasManyThrough(Order::class, Client::class);
    }

    public function store() {
        return $this->hasMany(Store::class);
    }

    public function client() {
        return $this->hasMany(Client::class);
    }

}
