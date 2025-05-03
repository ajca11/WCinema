<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AllUsersController extends Controller
{
    public function index(){
        
        return view('edit.edituser');
    }
}
