<?php

use App\Http\Controllers\Ticket\ProccessTicketController;
use App\Http\Controllers\Ticket\SendReplyController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Ticket\CreateTicketController;
use App\Http\Controllers\User\UpdateUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
});
Auth::routes(['verify' => true]);

Route::get('/register',[RegisterController::class,'showRegistrationForm']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/client',[DashboardController::class,'showDashboard'])->middleware('auth','verified')->name('client')->middleware('auth');

Route::get('/login',[LoginController::class,'showLogin']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/create-ticket',[CreateTicketController::class,'showCreateTicket']);
Route::post('/create-ticket',[CreateTicketController::class,'createTicket']);

Route::get('/user/edit/{id}',[UpdateUserController::class,'showUpdate']);

Auth::routes();

Route::get('/ticket/{id}',[ProccessTicketController::class,'showProccessTicket']);
Route::post('/ticket/{id}',[SendReplyController::class,'sendReply'])->name('store.reply');

Route::get('/admin',[\App\Http\Controllers\Admin\AdminDashboardController::class,'showAdminDashboard']);
