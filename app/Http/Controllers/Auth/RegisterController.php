<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Display a listing of the resource.
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $registerFields = $request->validate([
            'firstname' => ['required','max:50'],
            'lastname' => ['required','max:70'],
            'email' => ['required','email','max:255'],
            'password' => ['required','min:6','max:20','confirmed']
        ]);

        $user = User::create($registerFields);
        Auth::login($user);
        return redirect()->route('client');

    }

}
