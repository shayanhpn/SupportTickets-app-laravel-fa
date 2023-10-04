<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ProccessTicketController extends Controller
{
    public function showProccessTicket(Ticket $id)
    {
        $reply = Reply::where('ticket_id',$id->id)->get();
        return view('ticket.view-ticket',['ticket'=>$id,'reply'=>$reply]);
    }
    
}
