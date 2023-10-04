<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DeleteTicketController extends Controller
{
    public function showDeleteTicket(Ticket $id)
    {
        return view('admin.delete-ticket',['ticket' => $id]);
    }

    public function deleteTicket(Ticket $id)
    {
        $id->delete();
        return redirect()->route('admin.show.tickets');
    }
}
