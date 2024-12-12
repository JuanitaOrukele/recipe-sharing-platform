<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Assuming you have a name field in your form
        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            
        ]);

        $request->session()->put('user_id', $user->id);
        $request->session()->put('username', $user->username);

        return redirect()->route('home')->with('success', 'Registration successful! Welcome, ' . $user->username . '!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);
            return redirect()->route('home')->with('success', 'Logged in successfully! Welcome back, ' . $user->username . '!');
        }

        return back()->withErrors(['login' => 'Invalid username or password.'])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        $request->session()->forget('username');
        return redirect()->route('home')->with('success', 'Logged out successfully!');
    }
}