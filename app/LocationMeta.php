<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationMeta extends Model
{
    /**
     * Get the location that owns the meta data.
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
