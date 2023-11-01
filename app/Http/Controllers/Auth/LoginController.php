<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Logout User Function
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('danger','شما خارج شدید');
    }
    
    // Display Login Page
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
            'password' => ['required','min:6'],
            'captcha' => ['required','captcha']
        ],[
            'email.required' => 'وارد کردن ایمیل الزامی است',
            'email.email' => 'لطفا ایمیل صحیح را وارد کنید',
            'email.max' => 'کارکتر بیش از حد مجاز',
            'password.required' => 'وارد کردن رمز عبور الزامی می باشد',
            'password.min' => 'رمز عبور حداقل 6 کارمتر می باشد',
            'captcha.required' => 'وارد کردن کد امنیتی الزامی است',
            'captcha.captcha' => 'لطفا کد امنیتی صحیح را وارد کنید',
        ]);
        if(auth()->attempt(['email' => $loginFields['email'],'password' => $loginFields['password']])){
            session()->regenerate();
            if(auth()->user()->isAdmin)
            {
                return redirect()->route('admin.panel')->with('success','با موفقیت وارد شدید');
            }
            return redirect()->route('client.panel')->with('success','با موفقیت وارد شدید');
        }
        return back()->with('danger','نام کاربری / رمز عبور اشتباه است');
    }
}
