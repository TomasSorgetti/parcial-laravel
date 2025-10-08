<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name', 'max_projects', 'max_users', 'price'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
