<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EditMoviesController extends Controller
{
    public function index(){
        
        return view('manage.editmovies');
    }
}
