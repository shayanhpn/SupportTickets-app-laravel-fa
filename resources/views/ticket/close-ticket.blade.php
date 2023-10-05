@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container col-md-6">
    <form action="{{route('ticket.close',$ticket->id)}}" method="POST" class="p-4 bg-white shadow-sm rounded">
        @csrf
        @method('PUT')
       <h4>آیا مایل به بستن تیکت با عنوان {{$ticket->title}} می باشید؟ </h4>
        <p class="text-danger">در صورت بسته شده تیکت دیگر قادر به ارسال پاسخ نمی باشید و درصورت مشکل باید تیکت جدید ایجاد کنید</p>
        <button class="btn btn-lg btn-danger">بستن تیکت</button>
        <a class="btn btn-lg btn-outline-warning" href="{{route('show.ticket',$ticket->id)}}">برگشت</a>
    </form>
</div>
