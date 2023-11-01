<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DeleteTicketController extends Controller
{
    // Display Delete Ticket
    public function showDeleteTicket(Ticket $id)
    {
        return view('admin.delete-ticket',['ticket' => $id]);
    }

    // Delete Ticket Function
    public function deleteTicket(Ticket $id)
    {
        $id->delete();
        return redirect()->route('admin.show.tickets')->with('success','تیکت مورد نظر با موفقیت حذف شد');
    }
}
