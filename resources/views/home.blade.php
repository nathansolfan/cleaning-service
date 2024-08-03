<!-- resources/views/home.blade.php -->
<x-layout title="Home">
    <h1>Welcome, {{ Auth::user()->name }}</h1>
    <p>You are logged in!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</x-layout>
