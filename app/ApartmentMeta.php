<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmentMeta extends Model
{
    public $table = 'apartment_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'apartment_id',
        'location_meta_id',
        'field_value'
    ];

    /**
     * Get the apartment that owns the meta data.
     */
    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }
}
