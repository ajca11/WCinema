<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ReservationController extends Controller
{
    public function index(){
        
        return view('dev.reservation');
    }
}
