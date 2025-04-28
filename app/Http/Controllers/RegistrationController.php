<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RegistrationController extends Controller
{
    public function index(){
        
        return view('home.registration');
    }
}
