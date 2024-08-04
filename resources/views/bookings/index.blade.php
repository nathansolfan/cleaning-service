<x-layout title="Bookings List">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Bookings List</h1>

        @if (session('success'))
            <p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </p>
        @endif

        <ul class="space-y-4">
            @foreach ($bookings as $booking)
                <li class="flex items-center justify-between bg-gray-100 p-4 rounded">
                    <div>
                        <p class="text-gray-800"><strong>Customer:</strong> {{ $booking->user ? $booking->user->name : 'Guest' }}</p>
                        <p class="text-gray-800"><strong>Service Type:</strong> {{ $booking->service_type }}</p>
                        <p class="text-gray-800"><strong>Date:</strong> {{ $booking->date }}</p>
                        <p class="text-gray-800"><strong>Time:</strong> {{ $booking->time }}</p>
                        <p class="text-gray-800"><strong>Address:</strong> {{ $booking->address }}</p>
                        <p class="text-gray-800"><strong>City:</strong> {{ $booking->city }}</p>
                        <p class="text-gray-800"><strong>Comments:</strong> {{ $booking->comments }}</p>
                    </div>
                    <div class="space-x-2">
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        <a href="{{ route('bookings.show', $booking->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-6">
            <a href="{{ route('bookings.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create new Booking</a>
            <a href="{{ route('home') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Home</a>
        </div>
    </div>
</x-layout>
