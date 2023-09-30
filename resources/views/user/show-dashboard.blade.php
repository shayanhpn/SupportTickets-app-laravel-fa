@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                       اطلاعات شما
                </div>
                <div class="card-body">
                    <p>شایان پوریان</p>
                    <div class="d-flex flex-row justify-content-center">
                        <a class="btn btn-outline-success" href="">بروزرسانی مشخصات</a>
                    </div>
                </div>
            </div>
            <div class="card mt-4" style="width: 18rem;">
                <div class="card-header">
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
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">تیکت های فعال شما</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">تیکت های فعال شما</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
        </div>
            <div class="row mt-4">
                <div class="col-md-10">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
</div>
