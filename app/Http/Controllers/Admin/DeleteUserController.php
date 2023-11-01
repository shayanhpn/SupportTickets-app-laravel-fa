<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DeleteUserController extends Controller
{
    // Display Delete User Page
    public function showDeleteUser(User $id){
        return view('admin.delete-user',['user'=>$id]);
    }

    // Delete User Function
    public function deleteUser(User $id)
    {
        $id->delete();
        return redirect()->route('admin.show.users')->with('success','کاربر مورد نظر با موفقیت حذف شد');
    }
}
