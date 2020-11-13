<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    public $table = 'user_meta';

    /**
     * Get the user that owns the meta data.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
