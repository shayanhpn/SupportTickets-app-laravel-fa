@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm" style="width: 18rem;">
                <div class="card-header bg-teal text-white">
                     تیکت های اخیر شما
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">درخواست دوره</a></li>
                    <li class="list-group-item"><a href="">ثبت اطلاعات</a></li>
                    <li class="list-group-item"><a href="">موضوعات فرعی</a></li>
                </ul>
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
            <form action="" class="p-4 shadow-sm bg-white rounded" method="POST" enctype="multipart/form-data">
                @auth
                    <h4 class="mb-4"><span class="badge bg-teal">ارسال تیکت</span></h4>
                    <hr>
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="">موضوع*</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                            @error('title') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">بخش*</label>
                            <select class="form-select @error('section') is-invalid @enderror" name="section">
                                <option value="فنی">فنی</option>
                                <option value="مالی">مالی</option>
                                <option value="ارتباط عمومی">ارتباط عمومی</option>
                            </select>
                            @error('section') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                        <div class="col">
                            <label for="">اولویت*</label>
                            <select class="form-select @error('priority') is-invalid @enderror" name="priority">
                                <option value="کم">کم</option>
                                <option value="متوسط">متوسط</option>
                                <option value="زیاد">زیاد</option>
                                @error('priority') <p class="text-danger">{{$message}}</p> @enderror
                            </select>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <label for="">پیام*</label>
                            <textarea name="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="10"></textarea>
                            @error('message') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    </div>
                        <div class="my-3">
                            <label for="formFile" class="form-label">بارگذاری تصویر</label>
                            <input class="form-control" type="file" id="formFile" name="file">
                            @error('file') <p class="text-danger">{{$message}}</p> @enderror
                        </div>
                    <hr>
                    <div class="row my-2">
                        <div class="text-center">
                            <img src="{{captcha_src()}}" id="captcha-image" alt="">
                            <a type="button" class="btn btn-sm btn-primary text-white" id="reload-captcha"><i class="fa-solid fa-arrows-rotate"></i></a>
                            <div class="d-flex flex-row justify-content-center mt-2">
                                <div class="col-md-4 text-center">
                                    <input type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" placeholder="کد امنیتی">
                                    @error('captcha') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <button type="submit" class="btn btn-lg btn-lightgreen">ثبت</button>
                    </div>
                @else
                    <div class="row">
                        <div class="col">
                            <h4>ابتدا باید ثبت نام کنید</h4>
                            <p>اگر حساب کاربری دارید وارد شوید</p>
                        </div>
                        <div class="col">
                            <a href="{{route('register')}}" class="btn btn-lightgreen">ساخت حساب کاربری</a>
                            <a href="{{route('login')}}" class="btn btn-lightgreen">ورود</a>
                        </div>
                    </div>
                @endauth
            </form>
        </div>
    </div>
</div>
