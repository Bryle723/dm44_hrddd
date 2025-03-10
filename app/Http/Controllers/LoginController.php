<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
    
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ensure the view exists as resources/views/login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('message', 'Login successful'); // Redirects to dashboard or intended page
        }
        

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function authenticated(Request $request, $user)
{
    return redirect()->route('dashboard');
}
// Show Register Form
public function showRegisterForm()
{
    return view('auth.register');
}

// Handle Registration
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'office' => 'required|string|max:255',
        'unit' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'office' => $request->office,
        'unit' => $request->unit,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($user);

    return redirect('/login')->with('message', 'Registration successful');
}

// Handle Logout
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login')->with('success', 'You have been logged out.');
}
}

