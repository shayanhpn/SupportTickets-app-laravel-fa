<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SendReplyController extends Controller
{
    public function sendReply(Request $request,Ticket $id)
    {
        $request->validate([
            'message' => ['required','max:255'],

        ]);
        $reply = new Reply;
        $reply->user_id = auth()->user()->id;
        $reply->ticket_id = $id->id;
        $reply->message = $request->message;
        $reply->save();
        return 'Done';
    }
}
