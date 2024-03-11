<?php

namespace App\Http\Controllers;

use App\Helpers\RoleHelper;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {

//        $events = Event::whereNotNull('validated_at')->whereDoesntHave('reservations', fn($q) => $q->where('client_id', auth()->id()))->paginate(6);
        $events = Event::whereNotNull('validated_at')->with('reservations.client')->filter(request(['query']))->paginate(6);
        return view('home', compact('events'));
    }

    public function scaffold() {
        return [
            'links' => serialize(['reservations']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function reservations() {

        $reservations = auth()->user()->reservations()->get();
        return view('admin.index', array_merge($this->scaffold(),
            compact('reservations')
        ));
    }

}
