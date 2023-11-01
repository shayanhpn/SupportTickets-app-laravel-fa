<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class UserTicketsController extends Controller
{
    // Display All User's Tickets
    public function showAllUsersTickets()
    {
        $tickets = Ticket::where('user_id',auth()->user()->id)->paginate(10);
        return view('user.users-tickets',compact('tickets'));
    }
    public function showActiveUsersTickets(){
        $tickets = Ticket::where('user_id',auth()->user()->id)
        ->where(function($query){
            $query->where('status','در انتظار پاسخ')
                ->orWhere('status','پاسخ داده شده');
        })
            ->paginate(10);

        return view('user.active-tickets',['tickets' => $tickets]);
    }
}
