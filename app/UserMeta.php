<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    /**
     * Get the user that owns the meta data.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
