<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Bookings;
use App\Models\Users;

use Notification;
use App\Notifications\EventNotification;

use Illuminate\Support\Facades\Auth;

class EventUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::all();
        $bookedEvent = Bookings::select('event_id as id')->where('user_id', Auth::user()->id)->pluck('id')->toArray();

        return view('listEvent', compact('events', 'bookedEvent'));
    }

    public function book($id) {
        $checkBooks = Bookings::where('user_id', Auth::user()->id)->where('event_id', $id)->count();

        $event = Events::find($id);
        $user = Users::find($event->created_by_user_id);

        $eventNotif = $event;
        $eventNotif['buttonText'] = 'Event Book';
        $eventNotif['invoiceUrl'] = url('/event/'.$id);
        $eventNotif['thanks'] = 'Thank you for user Event Booking System!';

        Notification::send($user, new EventNotification($eventNotif));

        $invoice = Invoice::find($request->invoice_id)->first();

        if($checkBooks == 0) {
            Bookings::create([
                'user_id' => Auth::user()->id,
                'event_id' => $id
            ]);
            return redirect(url('/listEvent'));
        } else {
            return redirect(url('/listEvent'));
        }
    }
}
