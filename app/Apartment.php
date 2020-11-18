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
        'owner_name',
        'owner_phone',
        'owner_email',
        'location_id',
    ];

    /**
     * Get the meta data for apartment.
     */
    public function apartmentMeta()
    {
        return $this->hasMany('App\ApartmentMeta');
    }

    /**
     * Get the user for apartment.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the location this apartment belongs to
     */
    public function location() {
        return $this->belongsTo('\App\Location');
    }
}
