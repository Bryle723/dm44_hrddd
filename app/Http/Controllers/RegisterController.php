<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Ensure this matches your Blade file path
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'office' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
         // Store user in the database
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'office' => $request->office,
            'unit' => $request->unit,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to registration page with success message
        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
}
}