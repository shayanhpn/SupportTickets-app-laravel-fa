<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ViewAllTicketsController extends Controller
{
    // Display All Tickets
    public function showTickets()
    {
        $tickets = Ticket::orderBy('created_at','desc')->paginate(10);
        return view('admin.show-tickets',['tickets' => $tickets]);
    }
}
