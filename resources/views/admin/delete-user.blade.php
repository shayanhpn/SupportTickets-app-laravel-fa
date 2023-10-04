@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container col-md-6">
    <form action="{{route('delete.user',$user->id)}}" method="POST" class="p-4 bg-white shadow-sm rounded">
        @csrf
        @method('DELETE')
        <h4>آیا مایل به حذف کاربر {{$user->firstname}} {{$user->lastname}} می باشید؟ </h4>
        <p class="text-danger">اگر گزینه حذف را بزنید کاربر مورد نظر بصورت کامل از پایگاه داده حذف می شود</p>
        <button class="btn btn-lg form-btn">حذف</button>
        <a class="btn btn-lg btn-outline-warning" href="{{route('admin.show.users')}}">برگشت</a>
    </form>
</div>
