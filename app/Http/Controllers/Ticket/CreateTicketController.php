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
        Ticket::create($request->validated());
        return 'Created';
    }
}
