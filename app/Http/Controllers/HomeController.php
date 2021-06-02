<?php

namespace App\Http\Controllers;

use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        //Grabs every single row in the messages table
        $messages = Message::all();

//        foreach ($messages as $message) {
//            echo $message->title;
//        }
//        die;

        return view('home', [
            'messages' => $messages
        ]);
    }
}
