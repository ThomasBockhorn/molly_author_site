<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Events;

class WelcomeController extends Controller
{
    public function index()
    {
        $books = Books::orderBy('id', 'desc')->paginate(3);
        $events = Events::orderBy('id', 'desc')->paginate(5);

        return view('index')->with('books', $books)->with('events', $events);
    }
}