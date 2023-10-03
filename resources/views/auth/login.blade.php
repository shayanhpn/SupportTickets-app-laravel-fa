@extends('layouts.app')
<x-navbar>
</x-navbar>
@auth()
    <h3>{{auth()->user()->id}}</h3>
@endauth

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-4">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ورود به حساب کاربری</h4>
            <label for="">ایمیل</label>
            <input type="email" class="form-control border-0 bg-light @error('email') is-invalid @enderror" name="email">
            @error('email') <p class="text-danger">{{$message}}</p> @enderror
            <label for="">رمز عبور</label>
            <input type="password" class="form-control border-0 bg-light @error('password') is-invalid @enderror" name="password">
            @error('password') <p class="text-danger">{{$message}}</p> @enderror
            <div class="d-flex flex-row justify-content-center my-4">
                <button type="submit" class="btn btn-lg form-btn">ورود</button>
            </div>
        </form>
    </div>
</div>
