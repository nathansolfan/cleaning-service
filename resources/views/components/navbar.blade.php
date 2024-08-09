<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gray-800 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-lg font-bold">Cleaning Service</div>
        <div class="space-x-4">
            <a href="{{ route('welcome') }}" class="hover:text-gray-400">Welcome</a>
            <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
            <a href="{{ route('services') }}" class="hover:text-gray-400">Services</a>
            <a href="{{ route('about') }}" class="hover:text-gray-400">About</a>
            <a href="{{ route('contact') }}" class="hover:text-gray-400">Contact</a>
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Login</a>
            <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Register</a>
        </div>
    </div>
</nav>
