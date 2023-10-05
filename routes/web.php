<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\DeleteTicketController;
use App\Http\Controllers\Admin\DeleteUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ViewAllTicketsController;
use App\Http\Controllers\Ticket\CloseTicketController;
use App\Http\Controllers\Ticket\ProccessTicketController;
use App\Http\Controllers\Ticket\SendReplyController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Ticket\CreateTicketController;
use App\Http\Controllers\User\UpdateUserController;
use App\Http\Controllers\User\ViewUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
})->name('main');
Auth::routes(['verify' => true]);

Route::get('/register',[RegisterController::class,'showRegistrationForm']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/client',[DashboardController::class,'showDashboard'])->middleware('auth','verified')->name('client')->middleware('auth');

Route::get('/login',[LoginController::class,'showLogin']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/create-ticket',[CreateTicketController::class,'showCreateTicket'])->name('create-ticket');
Route::post('/create-ticket',[CreateTicketController::class,'createTicket']);


Auth::routes();

Route::get('/ticket/{id}',[ProccessTicketController::class,'showProccessTicket'])->name('show.ticket');
Route::post('/ticket/{id}',[SendReplyController::class,'sendReply'])->name('store.reply');

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/panel',[AdminDashboardController::class,'showAdminDashboard'])->name('panel');
    Route::get('/users',[UserController::class,'showUsers'])->name('show.users');
    Route::get('/tickets',[ViewAllTicketsController::class,'showTickets'])->name('show.tickets');
    Route::get('/ticket/delete/{id}',[DeleteTicketController::class,'showDeleteTicket'])->name('show.delete.ticket');
    Route::delete('/ticket/delete/{id}',[DeleteTicketController::class,'deleteTicket'])->name('delete.ticket');
    Route::get('/user/delete/{id}',[DeleteUserController::class,'showDeleteUser'])->name('show.delete.user');
    Route::delete('/user/delete/{id}',[DeleteUserController::class,'deleteUser'])->name('delete.user');
});

Route::get('/user/edit/{id}',[UpdateUserController::class,'showUpdate'])->name('user.update.show');
Route::put('/user/edit/{id}',[UpdateUserController::class,'updateUser'])->name('update.user');

Route::get('/user/view/{id}',[ViewUserController::class,'showSingleUser'])->name('view.user');

Route::get('/ticket/close/{id}',[CloseTicketController::class,'showCloseTicket'])->name('show.ticket.close');
Route::put('/ticket/close/{id}',[CloseTicketController::class,'closeTicket'])->name('ticket.close');
