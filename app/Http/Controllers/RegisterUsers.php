<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\RegisterUser; 
class RegisterUsers extends Controller
{
    //$ FOR REGISTER USERS CONTROLLER
    // public function showRegistrationForm()
    // {
    //     return view('auth.register'); // Adjust the view path if needed
    // }
    public function register(Request $request)
{
    try {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'emailaddress' => 'required|string|email|max:255|unique:users_register',
            'password' => 'required|string|min:8',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        RegisterUser::create($validated);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
