<?php

namespace App\Http\Controllers;

use App\Helpers\RoleHelper;
use App\Models\Event;

class AdminController extends Controller
{

    public function scaffold() {
        return [
            'links' => serialize(['overview', 'categories', 'events', 'users']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function index() {

        return view('admin.index', $this->scaffold());
    }

    public function events() {

        $events = Event::withTrashed()->with('organizer', 'category')->orderBy('updated_at', 'desc')->paginate(5);
        return view('admin.events', array_merge($this->scaffold(), compact('events')));
    }
}
