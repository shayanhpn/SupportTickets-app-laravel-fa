@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container d-flex flex-row justify-content-center">
    <div class="bg-white p-4 shadow-sm rounded col-md-4">
        <h3>نمایش کاربر</h3>
        <hr>
            <label for="">نام</label>
            <input type="text" class="form-control border-0 bg-light" value="{{$user->firstname}}" name="firstname" disabled>
            <label for="">نام خانوادگی</label>
            <input type="text" class="form-control border-0 bg-light" value="{{$user->lastname}}" name="lastname" disabled>
            <label for="">ایمیل</label>
            <input type="email" class="form-control border-0 bg-light" value="{{$user->email}}" name="email" disabled>
    </div>
</div>

