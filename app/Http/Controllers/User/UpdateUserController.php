<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UpdateUserController extends Controller
{
    public function showUpdate(User $id){
        if(auth()->user()->id === $id->id)
        {
            return view('user.update-user',['user' => $id]);
        }
        abort(403);

    }

    public function updateUser(UserRequest $request,User $id)
    {
        if(auth()->user()->id === $id->id)
        {
            $id->update($request->validated());
            return back()->with('success','بروزرسانی با موفقیت انجام شد');
        }else{
            abort(403);
        }
    }

}
