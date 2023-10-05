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
        return view('ticket.view-ticket',['ticket'=>$id]);
    }

}
