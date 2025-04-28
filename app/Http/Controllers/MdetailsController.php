<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MdetailsController extends Controller
{
    public function index(){
        
        return view('details.movie');
    }
}
