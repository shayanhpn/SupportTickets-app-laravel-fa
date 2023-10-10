<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        if(auth()->check()){
            $ticket = Ticket::where('user_id',auth()->user()->id)->get();
            $waitStatus = Ticket::where('user_id',auth()->user()->id)
                ->where('status','در انتظار پاسخ')
                ->count();
            $repliedStatus = Ticket::where('user_id',auth()->user()->id)
                ->where('status','پاسخ داده شده')
                ->count();
        }
        $activeStatus = $waitStatus + $repliedStatus;

        if(auth()->user()->isAdmin){
            return redirect()->route('admin.panel');
        }
        return view('user.show-dashboard',['tickets'=>$ticket,'active' =>$activeStatus]);
    }
}
