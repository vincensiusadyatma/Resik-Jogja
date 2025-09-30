<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];
    public function roleOwnerships()
    {
        return $this->hasMany(RoleOwnership::class);
    }
}
