<x-layout title="Edit Booking">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Booking</h1>
@if ($errors->any())
<div class="bg-red-100 text-red-700 p-4 rounded mb-4">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
        <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="service_type" class="block text-gray-700">Service Type</label>
                <input type="text" name="service_type" id="service_type" value="{{ $booking->service_type }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date</label>
                <input type="date" name="date" id="date" value="{{ $booking->date }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="time" class="block text-gray-700">Time</label>
                <input type="time" name="time" id="time" value="{{ $booking->time }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700">Address</label>
                <input type="text" name="address" id="address" value="{{ $booking->address }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="city" class="block text-gray-700">City</label>
                <input type="text" name="city" id="city" value="{{ $booking->city }}" required class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="comments" class="block text-gray-700">Comments</label>
                <textarea name="comments" id="comments" class="w-full border border-gray-300 p-2 rounded">{{ $booking->comments }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update Booking</button>
        </form>
    </div>
</x-layout>
