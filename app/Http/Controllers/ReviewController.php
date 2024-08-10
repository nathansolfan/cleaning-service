<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Booking $booking)
    {
        return view('review.create', compact('booking'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:255',
            'booking_id' => 'required|exists:bookings,id',
        ]);

        Review::create([
            'rating' => $request->rating,
            'comment' => $request->comment,
            'user_id' => auth()->id(),
            'booking_id' => $request->booking_id,
        ]);

        return redirect()->route('bookings.my_bookings')->with('success', 'Review Submitted with success');
    }


}
