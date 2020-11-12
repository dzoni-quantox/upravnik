<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $fillable = [
        'city',
        'street',
        'street_number',
        'number_of_apartments',
        'tax_number',
        'id_number',
    ];

    /**
     * Get the location meta data for the location.
     */
    public function locationMeta()
    {
        return $this->hasMany('App\LocationMeta');
    }

    /**
     * Get apartments for this location.
     */
    public function apartments()
    {
        return $this->hasMany('App\Apartment');
    }

    /**
     * Get notifications for this location.
     */
    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }
}
