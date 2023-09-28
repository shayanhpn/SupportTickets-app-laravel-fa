@extends('layouts.app')
<x-navbar>
</x-navbar>
@auth()
    <h3>{{auth()->user()->firstname}}</h3>
@endauth

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-6">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ورود به حساب کاربری</h4>
            <input type="email" class="form-control" placeholder="ایمیل" name="email">
            <input type="password" class="form-control" placeholder="رمز عبور" name="password">
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-primary">ورود</button>
            </div>
        </form>
    </div>
</div>
