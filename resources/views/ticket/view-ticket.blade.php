@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    اطلاعات شما
                </div>
                <div class="card-body">
                    <p>توسط: {{$ticket->user->firstname}}</p>
                    <hr class="text-info">
                    <p>بخش: {{$ticket->section}}</p>
                    <hr class="text-info">
                    <p>ارسال شده در: {{$ticket->created_at}}</p>
                    <hr class="text-info">
                    <p>بروزرسانی شده در:  {{$ticket->updated_at}}</p>
                    <hr class="text-info">
                    <p>اولویت: {{$ticket->priority}}</p>
                    <hr class="text-info">
                    <p>وضعیت: <span class="badge bg-warning p-2">{{$ticket->status}}</span></p>
                    <hr class="text-info">
                    <div class="d-flex flex-row justify-content-between">
                        <button class="btn btn-success"> پاسخ به تیکت</button>
                        <button class="btn btn-danger">بستن درخواست</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            {{$ticket->user->firstname}} {{$ticket->user->lastname}} - <span class="fw-bold">{{$ticket->user->isAdmin ? 'پشتیبان' : 'کاربر' }}</span>
                        </div>
                        <div>
                            {{$ticket->created_at}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p>{{$ticket->message}}</p>
                </div>
            </div>
            @foreach ($ticket->replies as $reply)
                <div class="card my-4">
                    <div class="card-header bg-{{$reply->user->isAdmin ? 'primary' : 'success'}} text-white">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                {{$reply->user->firstname}} {{$reply->user->lastname}} - <span class="fw-bold">{{$reply->user->isAdmin ? 'پشتیبان' : 'کاربر' }}</span>
                            </div>
                            <div>
                                {{$reply->created_at}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>{{$reply->message}}</p>
                    </div>
                </div>

            @endforeach
            <hr class="my-4">
            <div class="card my-4">
                <div class="card-header bg-info text-white">
                    <div class="d-flex flex-row justify-content-between">
                        پاسخ
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">

                            <label for="">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" value="{{$ticket->user->firstname}} {{$ticket->user->lastname}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="">ایمیل</label>
                            <input type="text" class="form-control" value="{{$ticket->user->email}}" disabled>
                        </div>
                    </div>
                    <form action="{{route('store.reply',$ticket->id)}}" class="mt-4" method="POST">
                        @csrf
                        <label for=message">پیام</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                        <div class="d-flex flex-row justify-content-center mt-4">
                            <button type="submit" class="btn btn-info text-white">ارسال پیام</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
