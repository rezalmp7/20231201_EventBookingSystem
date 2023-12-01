<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;

use Illuminate\Support\Facades\Auth;

class BookedUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookedEvent = Bookings::select('events.*')
            ->leftJoin('events', 'events.id', '=', 'bookings.event_id')
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('listBooking', compact('bookedEvent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
