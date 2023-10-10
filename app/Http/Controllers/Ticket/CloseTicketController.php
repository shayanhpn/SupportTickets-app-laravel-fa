<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;


class CloseTicketController extends Controller
{
    public function showCloseTicket(Ticket $id)
    {
        return view('ticket.close-ticket',['ticket' => $id]);
    }
    public function closeTicket(Ticket $id)
    {
        Ticket::where('id',$id->id)->update(['status' => 'بسته شده']);
        return redirect('client/ticket/' . $id->id)->with('danger','تیکت مورد مظر با موفقیت بسته شد');
    }
}
