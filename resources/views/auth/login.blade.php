@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-4">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ورود به حساب کاربری</h4>
            <hr>
            <label for="">ایمیل</label>
            <input type="email" value="{{old('email')}}" class="form-control border-0 bg-light @error('email') is-invalid @enderror" name="email">
            @error('email') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light @error('password') is-invalid @enderror" name="password">
            @error('password') <p class="text-danger">{{$message}}</p> @enderror
            <hr>
            <div class="row my-2">
                <div class="text-center">
                    <img src="{{captcha_src()}}" id="captcha-image" alt="">
                    <a type="button" class="btn btn-sm btn-primary text-white" id="reload-captcha"><i class="fa-solid fa-arrows-rotate"></i></a>
                    <div class="d-flex flex-row justify-content-center mt-2">
                        <div class="col-md-4 text-center">
                            <input type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" placeholder="کد امنیتی">
                            @error('captcha') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-center my-4">
                <button type="submit" class="btn btn-lg form-btn">ورود</button>
            </div>
            <p>اگر حساب کاربری ندارید لطفا <a href="{{route('register')}}" class="link-teal">ثبت نام</a> کنید</p>
        </form>
    </div>
</div>
