<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationMeta extends Model
{
    public $table = 'location_meta';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location_id',
        'field_name'
    ];

    /**
     * Get the location that owns the meta data.
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
