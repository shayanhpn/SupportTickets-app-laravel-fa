@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>ایمیل</th>
                <th>وضعیت تایید ایمیل</th>
                <th>ایجاد شده در</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td><h4><span class="badge bg-{{$user->email_verified_at != null ? 'success' : 'danger' }}">{{$user->email_verified_at != null ? 'دارد' : 'ندارد' }}</span></h4></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
