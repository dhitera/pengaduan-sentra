<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create() {
        return view("auth.login");
    }

    public function authenticate(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        
        $checkRemember = $request->has('remember') ? true : false; //Check value of remember me checkbox

        if (Auth::attempt($credentials, $remember = $checkRemember)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('home');
    }
}
