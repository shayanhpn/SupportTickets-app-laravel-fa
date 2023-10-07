@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
    <div class="container d-flex flex-row justify-content-center">
        <div class="bg-white p-4 shadow-sm rounded col-md-4">
            <h3>بروزرسانی کاربر</h3>
            <hr>
            <form action="{{route('client.update.user',$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="">نام</label>
                <input type="text" class="form-control border-0 bg-light" value="{{$user->firstname}}" name="firstname">
                <label for="">نام خانوادگی</label>
                <input type="text" class="form-control border-0 bg-light" value="{{$user->lastname}}" name="lastname">
                <label for="">ایمیل</label>
                <input type="email" class="form-control border-0 bg-light" value="{{$user->email}}" name="email">

                <label for="">رمز عبور جدید</label>
                <input type="password" class="form-control border-0 bg-light" name="password">
                <p class="text-danger" style="font-size: 10px !important;">لطفا اگر رمز عبور خود را نمی خواهید تغییر دهید آن را در کادر رمز عبور و در تکرار آن قرار دهید</p>
                <label for="">تکرار رمز عبور جدید</label>
                <input type="password" class="form-control border-0 bg-light" name="password_confirmation">
                <div class="d-flex flex-row justify-content-center my-4">
                    <button type="submit" class="btn btn-lg form-btn">بروزرسانی</button>
                </div>
            </form>
        </div>
    </div>

