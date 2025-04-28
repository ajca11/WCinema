<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index(){
        
        return view('home.login');
    }

    public function auth(Request $request): RedirectResponse{
        
        return redirect('/home');
    }
}
