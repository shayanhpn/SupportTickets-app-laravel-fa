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
                    <hr>
                    <p>بخش: {{$ticket->section}}</p>
                    <hr>
                    <p>ارسال شده در: {{$ticket->created_at}}</p>
                    <hr>
                    <p>بروزرسانی شده در:  {{$ticket->updated_at}}</p>
                    <hr>
                    <p>اولویت: {{$ticket->priority}}</p>
                    <hr>
                    <p>وضعیت: <span class=@if($ticket->status == 'در انتظار پاسخ') text-warning @elseif($ticket->status == 'بسته شده') 'text-danger' @else 'text-success'  @endif>{{$ticket->status}}</span></p>
                    <hr>
                    <div class="d-flex flex-row justify-content-between">
                        <button class="btn form-btn" id="response-button" @if($ticket->status == 'بسته شده')disabled @endif> پاسخ به تیکت</button>
                        @if($ticket->status == 'بسته شده')
                            <button class="btn btn-danger">بسته شده</button>
                        @else
                            <a href="{{route('client.show.ticket.close',$ticket->id)}}" class="btn btn-danger">بستن درخواست</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card mt-4 shadow-sm">
                <div class="card-header bg-primary text-white">
                    پشتیبانی
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">پشتیبانی</a></li>
                    <li class="list-group-item"><a href="">اخبار</a></li>
                    <li class="list-group-item"><a href="">مرکز آموزش</a></li>
                    <li class="list-group-item"><a href="">دانلود فایل</a></li>
                    <li class="list-group-item"><a href="">وضعیت شبکه</a></li>
                    <li class="list-group-item"><a href="">ارسال تیکت پشتیبانی</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card my-4">
                <div class="card-header {{$ticket->status == 'بسته شده' ? 'bg-secondary' : 'bg-info'}} text-white" id="{{$ticket->status == 'بسته شده' ? '' : 'response-header'}}">
                    <div class="d-flex flex-row justify-content-between">
                        <div>پاسخ</div>
                        <div class="icon-div" >@if($ticket->status == 'بسته شده') <i class="fa-regular fa-rectangle-xmark fa-fade"></i> @else <i class="fa-solid fa-square-caret-down fa-fade"></i> @endif</div>
                    </div>
                </div>
                <div class="card-body" id="response-body">
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
                    <form action="{{route('client.store.reply',$ticket->id)}}" class="mt-4" method="POST">
                        @csrf
                        <label for=message">پیام</label>
                        <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="5"></textarea>
                        @error('message') <p class="text-danger">{{$message}}</p> @enderror
                        <div class="d-flex flex-row justify-content-center mt-4">
                            <button type="submit" class="btn btn-info text-white">ارسال پیام</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4" style="border: 1px dotted">
            <div class="card">
                <div class="card-header bg-teal text-white">
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
            @foreach ($ticket->replies->sortBy('created_at') as $reply)
                <div class="card my-4">
                    <div class="card-header bg-{{$reply->user->isAdmin ? 'lightgreen' : 'teal'}} text-white">
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


        </div>
    </div>
</div>
