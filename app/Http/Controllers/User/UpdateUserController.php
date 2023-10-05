<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function showUpdate(User $id){
        if(auth()->user()->id == $id->id){
            return view('user.update-user',['user' => $id]);
        }
        return back()->with('danger','دسترسی غیرمجاز');
    }

    public function updateUser(UserRequest $request,User $id)
    {
        $id->update($request->validated());
        return 'Updated';
    }

}
