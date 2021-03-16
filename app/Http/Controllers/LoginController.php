<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function create() {
        return view('login-page');
    }

    public function store() {

        if (Auth::attempt(['username' => request('input-username'), 'password' => request('input-password')])) {
            return redirect()->intended('new-paste');
        }

        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ]);
    }
}
