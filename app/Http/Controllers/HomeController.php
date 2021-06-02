<?php

namespace App\Http\Controllers;

use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        //Grabs every single row in the messages table
        Message::all();

        return view('home');
    }
}
