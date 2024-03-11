<?php

namespace App\Http\Controllers;

use App\Helpers\FlashHelper;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Event $event) {

//        dd($event);
        $attributes = [
            'seat' => $event->seatNumber(),
            'validated_at' => $event->auto ? now() : NULL,
            'client_id' => auth()->id()
        ];

        $event->reservations()->create($attributes);

        return FlashHelper::redirect('home', 'success', 'Reservation added successfully');

    }

    public function approve($reservationID) {

        $reservation = Reservation::fetch($reservationID);
        $reservation->restore();
        $reservation->update([
            'validated_at' => now()
        ]);

        return FlashHelper::redirect('back', 'success', 'Reservation approved successfully');
    }

    public function reject(Reservation $reservation) {

        $reservation->update([
            'validated_at' => NULL
        ]);
        $reservation->delete();

        return FlashHelper::redirect('back', 'success', 'Reservation rejected successfully');
    }

    public function ticket(Reservation $reservation) {

        return view('client.ticket', compact('reservation'));
    }
}
