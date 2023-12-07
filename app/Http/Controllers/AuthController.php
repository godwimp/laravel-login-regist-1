<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === $request->session()->get('username') && $password === $request->session()->get('password')) {
            $request->session()->put('is_logged_in', true);

            return redirect('/dashboard');
        }else {
            return redirect()->back()->with('login_error', 'Invalid username or password');
        }
    }

}
