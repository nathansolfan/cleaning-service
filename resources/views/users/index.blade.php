<x-layout title="User List">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">User List</h1>

        @if (session('success'))
            <p class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </p>
        @endif

        <ul class="space-y-4">
            @foreach ($users as $user)
                <li class="flex items-center justify-between bg-gray-100 p-4 rounded">
                    <span class="text-gray-800">{{ $user->name }} ( {{ $user->email }} )</span>
                    <div class="space-x-2">
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        <a href="{{ route('users.show', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                    </div>
                </li>
            @endforeach
        </ul>

        <div class="mt-6">
            <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create new User</a>
            <a href="{{ route('welcome') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Welcome</a>

        </div>
    </div>
</x-layout>
