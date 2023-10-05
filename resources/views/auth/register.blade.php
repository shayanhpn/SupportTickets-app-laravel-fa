@extends('layouts.app')
<x-navbar>
</x-navbar>
<body>
<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-4">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ساخت حساب کاربری</h4>
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
            <div class="d-flex flex-row justify-content-center my-4">
                <button type="submit" class="btn btn-lg form-btn">ثبت نام</button>
            </div>
            <p>اگر حساب کاربری دارید لطفا <a href="{{route('login')}}">وارد</a> شوید</p>
        </form>
    </div>
</div>
</body>
