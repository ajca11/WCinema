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

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $movies = Movie::all();
        return view('reservations.editreserve', compact('reservation', 'movies'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'time_slot' => 'required|string',
            'tickets' => 'required|integer|min:1',
            'cinema_room' => 'required|integer',
            'name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'payment_method' => 'required|string',
        ]);

        $reservation->update($request->all());

        return redirect()->route('reservations.reservation')->with('success', 'Reservation deleted successfully');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->route('reservations.reservation')->with('success', 'Reservation deleted successfully');
    }
}
