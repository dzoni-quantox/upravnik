<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get users that have this role.
     */
    public function users() {
        return $this->hasMany('\App\User');
    }
}
