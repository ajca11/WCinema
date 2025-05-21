<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {

       
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
            'username' => 'required|string|unique:users,username|max:255',
        ]);

    
        User::create([

            'name' => $request->name,
'email' => $request->email,
'password' => Hash::make($request->password),
'phone_number' => $request->phone_number,
'username' => $request->username,
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');


        try {
            // Validate the incoming request data
            // $validatedData = $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|unique:users,email',
            //     'password' => 'required|string|min:8|confirmed',
            //     'phone_number' => 'required|string|max:15',
            //     'username' => 'required|string|unique:users,username|max:255',
            // ]);

            // // Create the user (password will be hashed in the User model)
            // User::create($validatedData);

            // // Redirect to login page
            // return redirect('/login')->with('success', 'Registration successful! Please log in.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
        }
    }
}