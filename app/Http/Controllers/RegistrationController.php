<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function index()
    {
        // Return the registration form view
        return view('registration');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
            'username' => 'required|string|unique:users,username|max:255',
        ]);

        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Save the user to the database
        User::create($validatedData);

        // Redirect to a confirmation page or login page
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}