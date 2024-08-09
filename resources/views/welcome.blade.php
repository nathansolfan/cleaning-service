<!-- resources/views/welcome.blade.php -->
<x-layout title="Welcome">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Welcome to Our Cleaning Service</h1>
        <p class="text-gray-600 mb-8">We offer top-notch cleaning services for your home and office. Book a service today and experience the difference!</p>
        <div class="space-x-4">
            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Register (Auth)</a>
            <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create User</a>
            <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Login</a>
            <a href="{{ route('bookings.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Create Booking</a>
        </div>
    </div>
</x-layout>
