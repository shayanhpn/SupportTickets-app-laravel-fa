@extends('layouts.app')
<x-navbar>
</x-navbar>

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-6">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ساخت حساب کاربری</h4>
            <input type="text" class="form-control" placeholder="نام" name="firstname">
            <input type="text" class="form-control" placeholder="نام خانوادگی" name="lastname">
            <input type="email" class="form-control" placeholder="ایمیل" name="email">
            <input type="password" class="form-control" placeholder="رمز عبور" name="password">
            <input type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation">
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-primary">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
