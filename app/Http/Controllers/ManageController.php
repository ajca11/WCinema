<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('manage.manage')->with([
            'movies' => $movies,
        ]);
    }

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('manage.editmovies', compact('movie'));
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

        $movie->update($request->except('picture'));

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('movies', 'public');
            $movie->update(['picture' => $path]);
        }

        return redirect()->route('manage.manage')->with('success', 'Movie updated successfully');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('manage.manage')->with('success', 'Movie deleted successfully');
    }
}
