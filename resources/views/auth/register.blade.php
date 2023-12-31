@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<body>
<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-4">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ساخت حساب کاربری</h4>
            <hr>
            <label for="">نام</label>
            <input type="text" class="form-control border-0 bg-light @error('firstname') is-invalid @enderror" name="firstname">
            @error('firstname') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">نام خانوادگی</label>
            <input type="text" class="form-control border-0 bg-light @error('lastname') is-invalid @enderror"  name="lastname">
            @error('lastname') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">ایمیل</label>
            <input type="email" class="form-control border-0 bg-light @error('email') is-invalid @enderror"  name="email">
            @error('email') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light @error('password') is-invalid @enderror"  name="password">
            @error('password') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">تکرار رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light" name="password_confirmation">
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
                <button type="submit" class="btn btn-lg form-btn">ثبت نام</button>
            </div>
            <p>اگر حساب کاربری دارید لطفا <a href="{{route('login')}}" class="link-teal">وارد</a> شوید</p>
        </form>
    </div>
</div>
</body>
