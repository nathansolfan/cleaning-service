<!-- resources/views/bookings/show.blade.php -->
<x-layout title="Booking Details">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Booking Details</h1>
        <div>
            <p class="text-gray-800"><strong>Service Type:</strong> {{ $booking->service_type }}</p>
            <p class="text-gray-800"><strong>Date:</strong> {{ $booking->date }}</p>
            <p class="text-gray-800"><strong>Time:</strong> {{ $booking->time }}</p>
            <p class="text-gray-800"><strong>Address:</strong> {{ $booking->address }}</p>
            <p class="text-gray-800"><strong>City:</strong> {{ $booking->city }}</p>
            <p class="text-gray-800"><strong>Status:</strong> {{ $booking->status }}</p>
            <p class="text-gray-800"><strong>Comments:</strong> {{ $booking->comments }}</p>
        </div>
        <div class="mt-6">
            <a href="{{ route('bookings.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Back to List</a>
        </div>
    </div>
</x-layout>
