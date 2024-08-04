<x-layout title="Request a Free Quote">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Request a Free Quote</h2>
        <form method="POST" action="{{ route('bookings.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="service_type" class="block text-gray-700 font-semibold mb-2">Service Type:</label>
                <input type="text" id="service_type" name="service_type" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="date" class="block text-gray-700 font-semibold mb-2">Date:</label>
                <input type="date" id="date" name="date" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="time" class="block text-gray-700 font-semibold mb-2">Time:</label>
                <input type="time" id="time" name="time" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="address" class="block text-gray-700 font-semibold mb-2">Address:</label>
                <input type="text" id="address" name="address" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="city" class="block text-gray-700 font-semibold mb-2">City:</label>
                <input type="text" id="city" name="city" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="comments" class="block text-gray-700 font-semibold mb-2">Comments:</label>
                <textarea id="comments" name="comments" class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">Request Quote</button>
            </div>
        </form>
    </div>
</x-layout>
