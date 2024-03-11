<?php

namespace App\Http\Controllers;

use App\Helpers\RoleHelper;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {

//        $events = Event::whereNotNull('validated_at')->whereDoesntHave('reservations', fn($q) => $q->where('client_id', auth()->id()))->paginate(6);
        $events = Event::whereNotNull('validated_at')->with('reservations.client')->filter(request(['query']))->paginate(6);
        $categories = Category::latest()->paginate(6);
        return view('home', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }

    public function category(Category $category) {

        $categories = Category::latest()->paginate(6);

        $events = $category->events()->whereNotNull('validated_at')->with('reservations.client')->filter(request(['query']))->paginate(6);
        return view('home', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }

    public function scaffold() {
        return [
            'links' => serialize(['reservations']),
            'role' => RoleHelper::getAuthRole()
        ];

    }

    public function reservations() {

        $reservations = auth()->user()->reservations()->with('event')->get();
        return view('client.reservations', array_merge($this->scaffold(),
            compact('reservations')
        ));
    }

}
