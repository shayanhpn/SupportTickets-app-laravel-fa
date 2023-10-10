@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="table-responsive p-4 bg-white rounded shadow-sm">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>نام و نام خانوادگی</th>
                <th>ایمیل</th>
                <th>وضعیت تایید ایمیل</th>
                <th>ایجاد شده در</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-center"><h5><span class="text-{{$user->email_verified_at != null ? 'success' : 'danger' }}">@if($user->email_verified_at != null) <i class="fa-solid fa-check"></i> @else <i class="fa-solid fa-xmark"></i> @endif</span></h5></td>
                    <td>{{$user->created_at}}</td>
                    <td class="text-center">
                        <a href="{{route('client.view.user',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="نگاه"><i class="link-teal fa-solid fa-eye"></i></a>
                        <a href="{{route('client.user.update.show',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="link-teal fa-solid fa-user-pen mx-3"></i></a>
                        <a href="{{route('admin.show.delete.user',$user->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="link-red fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9">هیچ رکوردی برای نمایش وجود ندارد</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="d-flex flex-row justify-content-center">
            {{$users->links()}}
        </div>
    </div>
</div>
