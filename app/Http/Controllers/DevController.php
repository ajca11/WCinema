<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class DevController extends Controller
{
    public function index(){
        // Retrieve all users
        $users = User::all();
        
        // Pass users to the view
        return view('dev.devhome', compact('users'));
    }
}
