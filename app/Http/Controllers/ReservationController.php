<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Movie;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('movie')->get();
        return view('reservations.reservation')->with([
            'reservations' => $reservations,
        ]);
    }

    public function showForm()
    {
        $movies = Movie::all();
        return view('details.booking', compact('movies')); // Pass the movies to the view
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $movies = Movie::all();
        return view('reservations.editreserve', compact('reservation', 'movies'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $validated = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'time_slot' => 'required|string',
            'tickets' => 'required|integer|min:1',
            'cinema_room' => 'required|integer',
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'payment_method' => 'required|string|in:online,counter',
        ]);

        $reservation->update($validated);

        return redirect()->route('reservations.reservation')->with('success', 'Reservation updated successfully');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'time_slot' => 'required|string',
            'tickets' => 'required|integer|min:1|max:3',
            'cinema_room' => 'required|string',
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email',
            'payment_method' => 'required|string|in:online,counter',
        ]);

        $reservation = Reservation::create($validated);

        $movie = Movie::find($validated['movie_id']);

        session([
            'reservation' => [
                'movie_title' => $movie->title,
                'time_slot' => $validated['time_slot'],
                'tickets' => $validated['tickets'],
                'cinema_room' => $validated['cinema_room'],
                'name' => $validated['name'],
                'contact_number' => $validated['contact_number'],
                'email' => $validated['email'],
                'payment_method' => $validated['payment_method'],
            ]
        ]);

        return redirect()->route('details.confirmation');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->route('reservations.reservation')->with('success', 'Reservation deleted successfully');
    }
}
