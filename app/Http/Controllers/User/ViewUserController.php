<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class ViewUserController extends Controller
{
    // Display Single User Page - Page    public function showSingleUser(User $id){
        return view('user.view-user',['user' => $id]);
    }
}
