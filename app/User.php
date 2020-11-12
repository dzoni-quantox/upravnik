<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'approved',
        'apartment_id',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user meta data for the user.
     */
    public function userMeta()
    {
        return $this->hasMany('App\UserMeta');
    }

    /**
     * Get roles for the user
     */
    public function roles() {
        return $this->belongsToMany('\App\Role');
    }

    /**
     * Get the apartment this user belongs to
     */
    public function apartment() {
        return $this->belongsTo('\App\Apartment');
    }
}
