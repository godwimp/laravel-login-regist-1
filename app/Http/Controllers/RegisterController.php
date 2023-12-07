<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        if($password !== $password_confirmation) { 
            return redirect()->back()->with('password-mismatch', true);
        }

        $request->session()->put('username', $request->input('username'));
        $request->session()->put('password', $request->input('password'));

        return redirect('/')->with('registration_success', true);
    }
}
