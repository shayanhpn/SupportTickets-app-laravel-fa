@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm" style="width: 18rem;">
                <div class="card-header bg-teal text-white">
                    اطلاعات شما
                </div>
                <div class="card-body">
                    <p>{{auth()->user()->firstname}} {{auth()->user()->lastname}}</p>
                    <div class="d-flex flex-row justify-content-center">
                        <a class="btn btn-lightgreen" href="{{route('client.user.update.show',auth()->user()->id)}}">بروزرسانی مشخصات</a>
                    </div>
                </div>
            </div>
            <div class="card mt-4 shadow-sm" style="width: 18rem;">
                <div class="card-header bg-teal text-white">
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
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-lightgreen text-white">
                            تیکت های فعال - در انتظار پاسخ
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">انتظار پاسخ و پاسخ داده شده</h6>
                            <h3 class="card-text fw-bold">{{$activeTickets}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-lightgreen text-white">
                            کل تیکت های کاربران
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">کل تیکت های ایجاد شده</h6>
                            <h3 class="card-text fw-bold">{{$allTickets}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-lightgreen text-white">
                            تعداد کل کاربران
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">تعداد کل کاربران ثبت نام کرده</h6>
                            <h3 class="card-text fw-bold">{{$allUsers}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 p-4">
                    <h4>آخرین تیکت ها</h4>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">عنوان</th>
                            <th scope="col">بخش</th>
                            <th scope="col">توسط</th>
                            <th scope="col">اولویت</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">ایجاد شده در</th>
                            <th>نمایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tickets as $ticket)
                            <tr>
                                <th>{{$ticket->title}}</th>
                                <td>{{$ticket->section}}</td>
                                <td>{{$ticket->user->email}}</td>
                                <td>{{$ticket->priority}}</td>
                                <td class=@if($ticket->status == 'در انتظار پاسخ') 'text-warning' @elseif($ticket->status == 'بسته شده') 'text-danger' @else 'text-success' @endif>{{$ticket->status}}</td>
                                <td>{{$ticket->created_at}}</td>
                                <td class="text-center"><a href="{{route('client.show.ticket',$ticket->id)}}"><i class="link-teal fa-solid fa-eye"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">رکوردی برای نمایش وجود ندارد</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        {{$tickets->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
