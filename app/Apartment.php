<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
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
