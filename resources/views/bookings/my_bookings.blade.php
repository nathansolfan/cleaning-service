<x-layout title="My Bookings">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">My Bookings</h1>

        @if($bookings->isEmpty())
            <p>No bookings found.</p>
        @else
            <ul class="space-y-4">
                @foreach ($bookings as $booking)
                    <li class="flex items-center justify-between bg-gray-100 p-4 rounded">
                        <div>
                            <p class="text-gray-800"><strong>Service Type:</strong> {{ $booking->service_type }}</p>
                            <p class="text-gray-800"><strong>Date:</strong> {{ $booking->date }}</p>
                            <p class="text-gray-800"><strong>Time:</strong> {{ $booking->time }}</p>
                            <p class="text-gray-800"><strong>Address:</strong> {{ $booking->address }}</p>
                            <p class="text-gray-800"><strong>City:</strong> {{ $booking->city }}</p>
                            <p class="text-gray-800"><strong>Comments:</strong> {{ $booking->comments }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="mt-6">
            <a href="{{ route('bookings.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create new Booking</a>
            <a href="{{ route('home') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Home</a>
        </div>
    </div>
</x-layout>
