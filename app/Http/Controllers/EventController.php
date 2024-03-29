<?php

namespace App\Http\Controllers;

use App\Helpers\FlashHelper;
use App\Helpers\ImageHelper;
use App\Helpers\RoleHelper;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{

    public function show(Event $event) {

        return view('event', compact('event'));
    }
    public function store(EventRequest $request) {

        $attributes = array_merge($request->validated(), [
            'image' => ImageHelper::store($request->only('image'))
        ]);

        $user = RoleHelper::getUser();
        $user->events()->create($attributes);

        return FlashHelper::redirect('organizer.events', 'success', 'Event added successfully');
    }

    public function edit(Event $event) {

        return view('organizer.events', [
            'edit' => true,
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event)
    {

        $attributes = $request->validate([
            'title' => ['required', Rule::unique('events', 'title')->ignore($event)],
            'description' => 'required|min:4',
            'venue' => 'required|min:4',
            'seats' => 'required|numeric|integer|min:1',
            'price' => 'required|numeric|min:1',
            'date' => 'required|date|before:' . now()->timezone('Africa/Casablanca')->addYears(2)->toDateTimeString() . '|after:' . now()->timezone('Africa/Casablanca')->toDateTimeString(),
            'category_id' => 'required|numeric|exists:categories,id',
            'image' => 'image'
        ]);

        if ($request->only('image') ?? false){
            $attributes = array_merge($attributes, [
                'image' => ImageHelper::store($request->only('image'))
            ]);
        }



        $event->update($attributes);

        return FlashHelper::redirect('organizer.events', 'success', 'Event updated successfully');
    }

    public function changeStatus(Event $event) {

        $event->update([
            'auto' => ! $event->auto
        ]);

        return FlashHelper::redirect('organizer.events', 'success', 'Event updated successfully');
    }

    public function approve($eventID) {

        $event = Event::fetch($eventID);
        $event->restore();
        $event->update([
            'validated_at' => now()
        ]);

        return FlashHelper::redirect('back', 'success', 'Event approved successfully');
    }

    public function reject(Event $event) {

        $event->update([
            'validated_at' => NULL
        ]);
        $event->delete();

        return FlashHelper::redirect('back', 'success', 'Event rejected successfully');
    }

    public function destroy(Event $event) {

        $event->forceDelete();

        return FlashHelper::redirect('organizer.events', 'success', 'Event deleted successfully');
    }

}
