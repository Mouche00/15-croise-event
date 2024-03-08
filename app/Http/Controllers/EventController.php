<?php

namespace App\Http\Controllers;

use App\Helpers\FlashHelper;
use App\Helpers\ImageHelper;
use App\Helpers\RoleHelper;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(EventRequest $request) {

        $attributes = array_merge($request->validated(), [
            'image' => ImageHelper::store($request->only('image'))
        ]);

        $user = RoleHelper::getUser();
        $user->events()->create($attributes);

        return FlashHelper::redirect('back', 'success', 'Event added successfully');
    }

    public function approve(Event $event) {

        $event->update([
            'validated_at' => now()
        ]);

        return FlashHelper::redirect('back', 'success', 'Event approved successfully');
    }

    public function destroy(Event $event) {

        $event->delete();

        return FlashHelper::redirect('back', 'success', 'Event deleted successfully');
    }
}
