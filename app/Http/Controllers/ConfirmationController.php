<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ConfirmationController extends Controller
{
    public function index(){
        
        return view('details.confirmation');
    }
}
