<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{
    public function index()
{
    $movies = Movie::all();
    return view('details.booking', compact('movies')); // Pass to the view
}
}
