<!-- resources/views/reviews/create.blade.php -->
<x-form-layout title="Leave a Review">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Leave a Review</h2>
        <form method="POST" action="{{ route('reviews.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="rating" class="block text-gray-700 font-semibold mb-2">Rating:</label>
                <select id="rating" name="rating" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="1">1 - Very Poor</option>
                    <option value="2">2 - Poor</option>
                    <option value="3">3 - Average</option>
                    <option value="4">4 - Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
            <div>
                <label for="comment" class="block text-gray-700 font-semibold mb-2">Comment:</label>
                <textarea id="comment" name="comment" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">Submit Review</button>
                <a href="{{ route('bookings.my_bookings') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-150">Cancel</a>
            </div>
        </form>
    </div>
</x-form-layout>
