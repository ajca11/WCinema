<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CreatemController extends Controller
{
    public function index(){
        
        return view('manage.createm');
    }
}
