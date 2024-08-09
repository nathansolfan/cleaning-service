<!-- resources/views/postcode_form.blade.php -->
<x-layout title="Postcode Lookup">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Lookup Address by Postcode</h2>
        <form method="POST" action="{{ route('postcode.lookup') }}" class="space-y-4">
            @csrf
            <div>
                <label for="postcode" class="block text-gray-700 font-semibold mb-2">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">Lookup</button>
            </div>
        </form>

        @if(session('address'))
            <div class="mt-6 bg-gray-100 p-4 rounded">
                <h3 class="text-xl font-semibold mb-2">Address Details:</h3>
                <p>{{ session('address') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="mt-6 bg-red-100 p-4 rounded text-red-700">
                {{ session('error') }}
            </div>
        @endif
    </div>
</x-layout>
