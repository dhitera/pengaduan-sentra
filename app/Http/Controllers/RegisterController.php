<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $userData = $request->validate([
            'nik' => 'required|min:16',
            'name' => 'required',
            'telepon' => 'required|min:12',
            'email' => 'required|email'
        ]);
        $userData['password'] = bcrypt($request->password);

        User::create($userData);

        return redirect('login');
    }
}
