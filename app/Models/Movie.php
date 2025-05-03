<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'year', 'rated', 'duration', 'picture', 'description',
        'main_cast', 'director', 'genre', 'time_slots', 'cinema_room'
    ];
}
