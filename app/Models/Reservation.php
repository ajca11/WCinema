<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Reservation extends Model
{
    protected $fillable = ['movie_id', 'time_slot','tickets','cinema_room', 'name', 'contact_number','email','payment_method',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
