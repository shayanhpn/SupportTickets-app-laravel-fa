<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class CreateTicketController extends Controller
{
    // Display Create Ticket Page
    public function showCreateTicket()
    {
        return view('ticket.create-ticket');
    }


    // Create Ticket Page
    public function createTicket(MainRequest $request){
        $ticket = new Ticket;
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads',$filename,'public');
            $ticket->file = $filename;
        }

        $ticket->fill($request->validated());
        $ticket->save();
        return redirect('client/ticket/'.$ticket->id)->with('success','تیکت مورد نظر ایجاد شد');
    }
}
