<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegistrationController extends Controller {
    public function create() {
        return view('register-page');
    }

    //validating and storing the data of the user who wants to register
    public function store() {
        $this->validate(request(), [
            'input-username' => 'required|unique:users,username',
            'input-email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'username'=> request('input-username'), 
            'email'=> request('input-email'),
            'password'=> request('password'),
        ]);

        Auth::login($user);

        return redirect()->to('/bins');
    }
}
