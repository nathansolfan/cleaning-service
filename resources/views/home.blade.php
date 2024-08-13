<x-layout title="Home">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-2xl mx-auto mt-10 border border-gray-200 text-center">
        <h1 class="text-5xl font-bold text-gray-900 mb-6">Welcome, {{ Auth::user()->name }}</h1>
        @if (Auth::user()->profile_picture)
            <div class="flex justify-center mb-6">
                <img src="{{ Storage::url(Auth::user()->profile_picture) }}" alt="Profile Picture" class="w-32 h-32 rounded-full object-cover shadow-md border-4 border-blue-500">
            </div>
        @endif
        <p class="text-gray-700 text-lg mb-8">You are successfully logged in!</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-150 shadow-md">
                Logout
            </button>
        </form>
        <div class="mt-8 space-y-4">
            <a href="{{ route('bookings.create') }}" class="block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 shadow-md">
                Create Booking
            </a>
            <a href="{{ route('bookings.index') }}" class="block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150 shadow-md">
                View All Bookings
            </a>
            <a href="{{ route('bookings.my_bookings') }}" class="block bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-500 transition duration-150 shadow-md">
                View Booking History
            </a>
            <a href="{{ route('profile.edit') }}" class="block bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-150 shadow-md">
                Edit Profile
            </a>
        </div>
    </div>
</x-layout>
