<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $fillable = [
        'city',
        'street',
        'street_number',
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
}
