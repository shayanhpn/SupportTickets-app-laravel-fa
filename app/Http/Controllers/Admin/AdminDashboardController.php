<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // Display Admin Dashboard
    public function showAdminDashboard()
    {
        $tickets = Ticket::orderBy('created_at','desc')->paginate(5);
        $replyTickets = Ticket::where('status','در انتظار پاسخ')->count();
        $waitingTickets = Ticket::where('status','پاسخ داده شده')->count();
        $activeTickets = $replyTickets + $waitingTickets;

        $allTickets = Ticket::all()->count();

        $allUsers = User::all()->count();
        return view('admin.show-admin-dashboard',compact('tickets','activeTickets','allTickets','allUsers'));
    }
}
