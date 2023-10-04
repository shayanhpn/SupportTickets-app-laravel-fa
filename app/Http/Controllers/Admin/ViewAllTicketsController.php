<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ViewAllTicketsController extends Controller
{
    public function showTickets()
    {
        $tickets = Ticket::all();
        return view('admin.show-tickets',['tickets' => $tickets]);
    }
}
