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
            $activeStatus = Ticket::where('user_id',auth()->user()->id)
                ->where('status','در انتظار پاسخ')
                ->orWhere('status','پاسخ داده شده')
                ->get();
        }
        return view('user.show-dashboard',['tickets'=>$ticket,'active' =>$activeStatus]);
    }
}
