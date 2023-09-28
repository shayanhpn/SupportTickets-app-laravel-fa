<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $loginFields = $request->validate([
            'email' => ['required','email','max:255'],
            'password' => ['required','min:6']
        ]);
        if(auth()->attempt($loginFields)){
            session()->regenerate();
            return 'LoggedIn Successfully';
        }
        return 'Failed LoggingIn';
    }
}
