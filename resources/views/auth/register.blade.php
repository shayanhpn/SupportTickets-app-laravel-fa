@extends('layouts.app')
<x-navbar>
</x-navbar>

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-4">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ساخت حساب کاربری</h4>
            <label for="">نام</label>
            <input type="text" class="form-control border-0 bg-light shadow-sm" name="firstname">
            <label for="">نام خانوادگی</label>
            <input type="text" class="form-control border-0 bg-light shadow-sm"  name="lastname">
            <label for="">ایمیل</label>
            <input type="email" class="form-control border-0 bg-light shadow-sm"  name="email">
            <label for="">رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light shadow-sm"  name="password">
            <label for="">تکرار رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light shadow-sm" name="password_confirmation">
            <div class="d-flex flex-row justify-content-center mt-4">
                <button type="submit" class="btn btn-lg btn-outline-primary">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
