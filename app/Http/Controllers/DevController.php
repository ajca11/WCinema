<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DevController extends Controller
{
    public function index(){
        
        return view('dev.devhome');
    }
}
