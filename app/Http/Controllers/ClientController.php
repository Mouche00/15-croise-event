<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {

        $events = Event::whereNotNull('validated_at')->get();
        return view('home', compact('events'));
    }
}
