<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Booking:: model
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // IF - CREATE if AUTH or QUOTE if NOT
        if (auth()->check()) {
            return view('bookings.create');
        } else {
            return view('bookings.quote');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the request to store
        $request->validate([
            'service_type' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'comments' => 'nullable|string|max:255',
        ]);

        // put all data into $data and then if ['user_id']
        $data = $request->all();
        if (auth()->check()) {
            $data['user_id'] = auth()->id();
        } else {
            $data['user_id'] = null;
        }

        Booking::create($data
        //     [
        //     'service_type' => $request->service_type,
        //     'date' => $request->date,
        //     'time' => $request->time,
        //     'address' => $request->address,
        //     'city' => $request->city,
        //     'comments' => $request->comments,
        // ]
    );

        // redirect
        return redirect()->route('bookings.index')->with('success', 'Booking created with sucessoo');
    }



    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {

        Log::info('Updating booking: ', ['booking_id' => $booking->id]);

        $request->validate([
            'service_type' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'comments' => 'nullable|string|max:255',
        ]);

        $booking->update($request->all());

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * Booking extendes from model
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking deleted succesfully');
    }


    public function myBookings()
    {
        if (!auth()->check()) {
            return redirect()->route('bookings.index')->with('error', 'Please log in to view your bookings');
        }

        // Booking::where('user_id', ...) querying bookings table where the user_id matches
        // auth()->id() returns the id of the auth user, if no logged, return null
        $bookings = Booking::where('user_id', auth()->id())->get();
        Log::info($bookings); // Add this line to log the bookings to the Laravel log
        return view('bookings.my_bookings', compact('bookings'));
    }

    public function calendar()
    {
        $user = Auth::user();

        $bookings = Booking::where('user_id', $user->id)->get();
        return view('bookings.calendar', compact('bookings'));
    }
}
