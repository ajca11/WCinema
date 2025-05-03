<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ManageController extends Controller
{
    public function index(){
        
        return view('dev.manage');
    }
}
