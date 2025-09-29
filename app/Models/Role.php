<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function roleOwnerships()
    {
        return $this->hasMany(RoleOwnership::class);
    }
}
