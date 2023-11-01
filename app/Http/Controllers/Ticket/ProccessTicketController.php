<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ProccessTicketController extends Controller
{
    // Display Proccess Ticket Page
    public function showProccessTicket(Ticket $id)
    {
        if(auth()->user()->id === $id->user_id || auth()->user()->isAdmin)
        {
            return view('ticket.view-ticket',['ticket'=>$id]);
        }else{
            abort(403);
        }

    }

}
