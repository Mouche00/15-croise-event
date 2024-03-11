<?php

namespace App\Http\Controllers;

use App\Helpers\RoleHelper;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;

class AdminController extends Controller
{

    public function scaffold() {
        return [
            'links' => serialize(['overview', 'categories', 'events', 'users']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function index() {

        $events = Event::all()->count();
        $reservations = Reservation::all()->count();
        $users = User::all()->count();
        return view('admin.index', array_merge($this->scaffold(),
            compact('events'),
            compact('reservations'),
            compact('users'),
        ));
    }

    public function events() {

        $events = Event::withTrashed()->with('organizer', 'category')->orderBy('updated_at', 'desc')->paginate(5);
        return view('admin.events', array_merge($this->scaffold(), compact('events')));
    }

    public function users() {

        $users = User::withTrashed()->whereDoesntHave('role', fn($q) => $q->where('name', 'admin'))->with('role')->orderBy('updated_at', 'desc')->paginate(5);
        return view('admin.users', array_merge($this->scaffold(), compact('users')));
    }
}
