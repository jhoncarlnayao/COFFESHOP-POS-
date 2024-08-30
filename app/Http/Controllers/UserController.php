<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    //

    public function register_account(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'emailaddress' => 'required|email|unique:users,emailaddress',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        // Create a new user
        $registerUser = new User();
        $registerUser->firstname = $request->input('firstname');
        $registerUser->middlename = $request->input('middlename');
        $registerUser->lastname = $request->input('lastname');
        $registerUser->birthdate = $request->input('birthdate');
        $registerUser->emailaddress = $request->input('emailaddress');
        $registerUser->password = Hash::make($request->input('password'));
        $registerUser->save();
    
        // Redirect to the login page with a success message
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
}






//  public function register_residents_users(Request $request)
//     {
//         $validatedData = $request->validate([
//             'Firstname' => 'required|string',
//             'Middlename' => 'nullable|string',
//             'Lastname' => 'required|string',
//             'username' => 'required|string',
//             'email' => 'required|string',
//             'contactnumber' => 'required|string',
//             'password' => 'required|string|min:2|confirmed',
//         ]);

//         $residentUser = new users();
//         $residentUser->firstname = $request->input('Firstname');
//         $residentUser->middlename = $request->input('Middlename');
//         $residentUser->lastname = $request->input('Lastname');
//         $residentUser->username = $request->input('username');
//         $residentUser->email = $request->input('email');
//         $residentUser->contactnumber = $request->input('contactnumber');
//         $residentUser->password = Hash::make($request->input('password'));
//         //$residentUser->password = $request->input('password');
//         $residentUser->save();


//         return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
//     }

//     public function authenticate(Request $request)
//     {
//         $credentials = $request->only('username', 'password');
//         $user = users::where('username', $credentials['username'])->first();


//         if (!$user || !Hash::check($credentials['password'], $user->password)) {
//             return redirect()->back()->withInput()->withErrors(['loginError' => 'Invalid username or password']);
//         }
//         Auth::login($user);
//         return redirect()->intended('dashboard');
//     }
