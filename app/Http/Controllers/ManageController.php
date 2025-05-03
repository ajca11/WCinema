<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Movie;

class ManageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('dev.manage', compact('movies'));
    }
}
