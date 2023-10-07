<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function showUpdate(User $id){
        return view('user.update-user',['user' => $id]);
    }

    public function updateUser(UserRequest $request,User $id)
    {
        $id->update($request->validated());
        return back()->with('success','بروزرسانی با موفقیت انجام شد');
    }

}
