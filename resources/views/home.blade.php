<!-- resources/views/home.blade.php -->
<x-layout title="Home">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome, {{ Auth::user()->name }}</h1>
        <p class="text-gray-600 mb-8">You are logged in!</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-150">Logout</button>
        </form>
        <div class="mt-6">
            <a href="{{ route('bookings.create') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Create Booking</a>
            <a href="{{ route('bookings.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">View Bookings</a>
            <a href="{{ route('bookings.my_bookings') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">View Booking History</a>
            <a href="{{ route('bookings.history') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">View History</a>



        </div>
    </div>
</x-layout>
