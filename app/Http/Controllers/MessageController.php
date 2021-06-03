<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $message = new Message();
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return redirect('/');
    }
}
