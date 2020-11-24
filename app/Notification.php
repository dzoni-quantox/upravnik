<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['location_id','subject','text'];
    
    /**
     * Get the location this notification belongs to
     */
    public function location() {
        return $this->belongsTo('\App\Location');
    }
}
