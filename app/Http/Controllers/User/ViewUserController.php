<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ViewUserController extends Controller
{
    public function showSingleUser(User $id){
        return view('user.view-user',['user' => $id]);
    }
}
