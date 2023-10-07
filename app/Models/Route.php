<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    public function stops()
    {
        return $this->belongsToMany(Stop::class, 'route_stops')
            ->withPivot('sequence')
            ->orderBy('sequence');
    }
}
