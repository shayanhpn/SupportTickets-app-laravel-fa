<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class CreateTicketController extends Controller
{
    public function showCreateTicket()
    {
        return view('ticket.create-ticket');
    }

    public function createTicket(MainRequest $request){
        $ticket = Ticket::create($request->validated());
        return redirect('client/ticket/'.$ticket->id)->with('success','تیکت مورد نظر ایجاد شد');
    }
}
