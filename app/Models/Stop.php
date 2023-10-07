<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;
    
    public function routes()
    {
        return $this->belongsToMany(Route::class, 'route_stops')
            ->withPivot('sequence')
            ->orderBy('sequence');
    }
}
