@extends('layouts.app')
<x-navbar-admin></x-navbar-admin>
<div class="container">
    <div class="table-responsive p-4 bg-white rounded shadow-sm">
        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
                <th>عنوان</th>
                <th>بخش</th>
                <th>اولویت</th>
                <th>وضعیت</th>
                <th>تعداد پاسخ ها</th>
                <th>تاریخ ایجاد</th>
                <th>نمایش</th>
            </tr>
            </thead>
            <tbody>
            @forelse($tickets as $ticket)
                <tr>
                    <td>{{$ticket->title}}</td>
                    <td>{{$ticket->section}}</td>
                    <td>{{$ticket->priority}}</td>
                    <td class=@if($ticket->status == 'بسته شده') 'text-danger' @elseif($ticket->status == 'در انتظار پاسخ') 'text-warning' @else 'text-success' @endif>{{$ticket->status}}</td>
                    <td>{{count($ticket->replies)}}</td>
                    <td>{{$ticket->created_at}}</td>
                    <td class="text-center">
                        <a href="{{route('client.show.ticket',$ticket->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="نگاه"><i class="link-teal fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">رکوردی برای نمایش وجود ندارد</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
