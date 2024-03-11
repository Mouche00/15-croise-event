<?php

namespace App\Http\Controllers;

use App\Helpers\RoleHelper;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function scaffold() {
        return [
            'links' => serialize(['overview', 'events']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function index() {

        return view('organizer.index', $this->scaffold());
    }

    public function events() {

        $events = auth()->user()->events()->withTrashed()->orderBy('updated_at', 'desc')->paginate(5);
        $categories = Category::all();
        return view('organizer.events', array_merge($this->scaffold(), compact('events'), compact('categories')));
    }

    public function edit(Event $event) {

        $events = auth()->user()->events()->get();
        $categories = Category::all();
        return view('organizer.events', array_merge($this->scaffold(), compact('events'), compact('categories'), [
            'edit' => true,
            'selectedEvent' => $event
        ]));
    }

    public function reservations(Event $event) {


        $reservations = $event->reservations()->latest()->with('client')->orderBy('updated_at', 'desc')->withTrashed()->paginate(5);
        return view('organizer.reservations', array_merge($this->scaffold(), compact('reservations'), compact('event')));
    }
}
