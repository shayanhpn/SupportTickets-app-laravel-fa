@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm" style="width: 18rem;">
                <div class="card-header bg-primary text-white">
                    اطلاعات شما
                </div>
                <div class="card-body">
                    <p>شایان پوریان</p>
                    <div class="d-flex flex-row justify-content-center">
                        <a class="btn btn-outline-success" href="">بروزرسانی مشخصات</a>
                    </div>
                </div>
            </div>
            <div class="card mt-4 shadow-sm" style="width: 18rem;">
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
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-info text-white">
                            تیکت های فعال - در انتظار پاسخ
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">انتظار پاسخ و پاسخ داده شده</h6>
                            <h3 class="card-text fw-bold">+20</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-info text-white">
                            کل تیکت های کاربران
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">کل تیکت های ایجاد شده</h6>
                            <h3 class="card-text fw-bold">+20</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="card-header bg-info text-white">
                            تعداد کل کاربران
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">تعداد کل کاربران ثبت نام کرده</h6>
                            <h3 class="card-text fw-bold">+20</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 p-4">
                    <h4>آخرین تیکت ها</h4>
                    <hr>
                    <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">عنوان</th>
                            <th scope="col">بخش</th>
                            <th scope="col">توسط</th>
                            <th scope="col">اولویت</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">ایجاد شده در</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <th>{{$ticket->title}}</th>
                                <td>{{$ticket->section}}</td>
                                <td>{{$ticket->user->email}}</td>
                                <td>{{$ticket->priority}}</td>
                                <td>{{$ticket->status}}</td>
                                <td>{{$ticket->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
