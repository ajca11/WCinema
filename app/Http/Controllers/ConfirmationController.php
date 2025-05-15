<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ConfirmationController extends Controller
{
    public function index()
    {
        $reservation = session('reservation');
        
        if (!$reservation) {
            return redirect()->route('details.booking');
        }
        
        return view('details.confirmation', compact('reservation'));
    }
}
