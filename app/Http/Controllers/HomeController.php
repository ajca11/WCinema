<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home.home')->with([
            'movies' => $movies,
        ]);
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('home.home', compact('movie'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|string|max:4',
            'rated' => 'required|string|max:10',
            'duration' => 'required|string|max:10',
            'picture' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'main_cast' => 'required|string',
            'director' => 'required|string',
            'genre' => 'required|string',
            'time_slots' => 'required|string',
            'cinema_room' => 'required|integer',
        ]);
    }
}
