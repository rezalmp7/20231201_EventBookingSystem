<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Auth::user()->role == 'user') {
            $events = Events::where('created_by_user_id', Auth::user()->id)->paginate("10");
        } else {
            $events = Events::paginate("10");
        }

        return view('events.index', compact('events'));
    }


    /**
     * @OA\Get(
     *     title="Event",
     *     path="/api/getEvent",
     *     summary="Get logged-in user details",
     *     @OA\Response(response="200", description="Success"),
     *     security={{"bearerAuth":{}}}
     * )
     */
    public function getEventApi(Request $request)
    {
        $events = Events::paginate("10");
        return response()->json(['events' => $events], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'slots_available' => 'required',
        ]);

        Events::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'slots_available' => $request->slots_available,
            'created_by_user_id' => Auth::user()->id
        ]);

        return redirect(url('/event'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Events::find($id);
        $booked = Bookings::where('event_id')->get();
        return view('events.show', compact('event', 'booked'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Events::find($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'slots_available' => 'required',
        ]);

        Events::whereId($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'slots_available' => $request->slots_available,
            'created_by_user_id' => Auth::user()->id
        ]);

        return redirect(url('/event'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Events::whereId($id)->delete();

        return redirect(url('/event'));
    }

    public function booking($id) {
        dd($id);
    }
}
