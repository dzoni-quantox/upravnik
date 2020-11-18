<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentMeta extends Model
{
    public $table = 'apartment_meta';

    /**
     * Get the apartment that owns the meta data.
     */
    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
