<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function showAdminDashboard()
    {
        $tickets = Ticket::all();
        return view('admin.show-admin-dashboard',compact('tickets'));
    }
}
