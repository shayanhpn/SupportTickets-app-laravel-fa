@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm " style="width: 18rem;">
                <div class="card-header bg-teal text-white">
                       اطلاعات شما
                </div>
                <div class="card-body">
                    <p>شایان پوریان</p>
                    <div class="d-flex flex-row justify-content-center">
                        <a class="btn btn-lightgreen" href="{{route('show.update.user',auth()->user()->id)}}">بروزرسانی مشخصات</a>
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
                    <div class="col-md-6">
                        <div class="card shadow-sm" style="width: 18rem;">
                            <div class="card-header bg-lightgreen text-white">
                                تیکت های فعال شما
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-body-secondary">در انتظار پاسخ و پاسخ داده شده</h6>
                                <h3 class="card-text fw-bold">{{count($active)}}</h3>
                            </div>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-lightgreen text-white">
                            کل تیکت های فعال شما
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">کل تیکت های ایجاد شده</h6>
                            <h3 class="card-text fw-bold">{{count($tickets)}}</h3>
                        </div>
                    </div>
                </div>
        </div>
            <div class="row mt-4">
                <div class="col-md-10 p-4 bg-white rounded shadow-sm">
                    <h5>تیکت های اخیر شما</h5>
                    <hr>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">عنوان</th>
                            <th scope="col">بخش</th>
                            <th scope="col">اولویت</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">ایجاد شده در</th>
                            <th>نمایش</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                        <tr>
                            <th>{{$ticket->title}}</th>
                            <td>{{$ticket->section}}</td>
                            <td>{{$ticket->priority}}</td>
                            <td class=@if($ticket->status == 'در انتظار پاسخ') 'text-warning' @elseif($ticket->status == 'بسته شده') 'text-danger' @else 'text-success' @endif>{{$ticket->status}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td class="text-center"><a href="{{route('show.ticket',$ticket->id)}}"><i class="link-teal fa-solid fa-eye"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
</div>
