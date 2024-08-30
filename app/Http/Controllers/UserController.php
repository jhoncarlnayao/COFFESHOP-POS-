<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    //

    public function register_account(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'emailaddress' => 'required|email|unique:users,emailaddress',
            'password' => 'required|string|min:3',
        ]);
    
        // User::create([
        //     'firstname' => $validatedData['firstname'],
        //     'middlename' => $validatedData['middlename'],
        //     'lastname' => $validatedData['lastname'],
        //     'birthdate' => $validatedData['birthdate'],
        //     'emailaddress' => $validatedData['emailaddress'],
        //     'password' => $validatedData['password'],
        // ]);
    
       $registerAccount = new User();
    $registerAccount->firstname = $request->input('firstname');
    $registerAccount->middlename = $request->input('middlename');
    $registerAccount->lastname = $request->input('lastname');
    $registerAccount->birthdate = $request->input('birthdate');
    $registerAccount->emailaddress = $request->input('emailaddress');
    $registerAccount->password = Hash::make($request->input('password')); // Hash the password before saving
    $registerAccount->save();
        
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }


    public function login_account(Request $request){

    }




}
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
