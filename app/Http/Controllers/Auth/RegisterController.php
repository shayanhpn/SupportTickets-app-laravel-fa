<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Jobs\SendVerificationEmail;
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
    public function register(UserRequest $request)
    {
        $user = User::create($request->validated());
        dispatch(new SendVerificationEmail($user));
        Auth::login($user);
        return redirect()->route('client');

    }

}
