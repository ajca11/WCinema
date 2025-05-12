<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index(){
        
        return view('home.login');
    }

    public function auth(Request $request): RedirectResponse{
        $credentials = $request->only('email', 'password');

        Log::info('Request data', $request->all());

        if (Auth::attempt($credentials)) {
            // Authentication passed, save user data in session
            $request->session()->regenerate();
            Log::info('User logged in successfully', ['user_id' => Auth::id()]);
            return redirect('/home')->with('success', 'Logged in successfully!');
        }

        Log::warning('Failed login attempt', ['email' => $request->input('email')]);
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}
