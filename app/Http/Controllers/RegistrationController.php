<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller {
    public function create() {
        return view('register-page');
    }

    public function store() {
        $this->validate(request(), [
            'input-username' => 'required',
            'input-email' => 'required|email',
            'input-password' => 'required'
        ]);

        $user = User::create([
            'username'=> request('input-username'), 
            'email'=> request('input-email'),
            'password'=> request('input-password'),
        ]);

        Auth::login($user);

        return redirect()->to('/new-paste');
    }
}
