<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $table = "users";
    protected $guarded = [];

    protected $hidden = [
        'id',
        'password'
    ];

    protected $casts = [
        'email_verified_at' => 'json',
    ];

    public function orders() {
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }

    public function messages() {
        return $this->hasMany('App\Models\Message', 'seller_id', 'id');
    }

    public function getJWTIdentifier()
    {
        // TODO: Implement getJWTIdentifier() method.
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // TODO: Implement getJWTCustomClaims() method.
        return [];
    }
}
