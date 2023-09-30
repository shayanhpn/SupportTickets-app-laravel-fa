@extends('layouts.app')
<x-navbar>
</x-navbar>
@auth()
    <h3>{{auth()->user()->id}}</h3>
@endauth

<div class="container d-flex flex-row justify-content-center">
    <div class="p-4 bg-white rounded shadow-sm col-md-6">
        <form action="" method="POST">
            @csrf
            <h4 class="text-center">ورود به حساب کاربری</h4>
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email">
            @error('email') <p class="text-danger">{{$message}}</p> @enderror
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password">
            @error('password') <p class="text-danger">{{$message}}</p> @enderror
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-lg teal">ورود</button>
            </div>
        </form>
    </div>
</div>
