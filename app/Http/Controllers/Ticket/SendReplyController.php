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

        ],[
            'message.required' => 'لطفا پیام خود را بنویسید',
            'message.max' => 'حداکثر کارکتر وروردی 255 کارکتر می باشد'
        ]);
        $reply = new Reply;
        $reply->user_id = auth()->user()->id;
        $reply->ticket_id = $id->id;
        $reply->message = $request->message;
        if($id->status !== 'بسته شده'){
            if(auth()->user()->isAdmin){
                $id->status = 'پاسخ داده شده';
                $id->save();
            }else{
                $id->status = 'در انتظار پاسخ';
                $id->save();
            }
            $reply->save();
        }else{
            return back()->with('danger','عملیات غیر مجاز');
        }


        return redirect('/ticket/' . $reply->ticket_id)->with('success','پیام شما با موفقیت ایجاد شد');
    }
}
