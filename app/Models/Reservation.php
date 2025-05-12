<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['movie_id', 'time_slot','tickets','cinema_room', 'name', 'contact_number','email','payment_method',
    ];
}
