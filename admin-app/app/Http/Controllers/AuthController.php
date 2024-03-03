<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $username = $request->input('username');
    $password = $request->input('password');

    $user = DB::table('admininfo')->where('username', $username)->first();

    if ($user && password_verify($password, $user->password)) {
        return redirect()->route('about')->with(['message' => 'Login successful']);
    } else {
        return redirect()->route('login')->with(['message' => 'Invalid credentials']);
    }
}


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $affectedRows = DB::table('admininfo')->insert([
            'username' => $username,
            'password' => $hashedPassword,
        ]);

        if ($affectedRows) {
        

            return redirect()->route('about')->with(['message' => 'Register successful']);

        } else {
            return redirect()->route('register')->with(['message' => 'Registration failed']);
        }
    }
}
