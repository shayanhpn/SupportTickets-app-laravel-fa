<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Ticket\CreateTicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::resource('register', RegisterController::class);



Route::get('/login',[LoginController::class,'showLogin']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/create-ticket',[CreateTicketController::class,'showCreateTicket']);
Route::post('/create-ticket',[CreateTicketController::class,'createTicket']);


