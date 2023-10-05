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
            <input type="text" class="form-control border-0 bg-light" name="firstname">
            <label for="">نام خانوادگی</label>
            <input type="text" class="form-control border-0 bg-light"  name="lastname">
            <label for="">ایمیل</label>
            <input type="email" class="form-control border-0 bg-light"  name="email">
            <label for="">رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light"  name="password">
            <label for="">تکرار رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light" name="password_confirmation">
            <div class="d-flex flex-row justify-content-center my-4">
                <button type="submit" class="btn btn-lg form-btn">ثبت نام</button>
            </div>
            <p>اگر حساب کاربری دارد لطفا <a href="{{route('login')}}">وارد</a> شوید</p>
        </form>
    </div>
</div>
</body>
