<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers(){
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('admin.show-users',compact('users'));
    }
}
