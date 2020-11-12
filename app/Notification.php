<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * Get the location this notification belongs to
     */
    public function location() {
        return $this->belongsTo('\App\Location');
    }
}
