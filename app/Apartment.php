<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'apartment_number',
        'owner',
        'owner_phone',
        'owner_email',
        'location_id',
    ];

    /**
     * Get the users for apartment.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the location this apartment belongs to
     */
    public function location() {
        return $this->belongsTo('\App\Location');
    }
}
