<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['workbench_id', 'name', 'description', 'address', 'latitude', 'longitude', 'status', 'start_date', 'end_date'];

    public function boards()
    {
        return $this->hasMany(Board::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role')->withTimestamps();
    }

    public function workbench()
    {
        return $this->belongsTo(Workbench::class);
    }
}
