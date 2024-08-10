<!-- resources/views/bookings/show.blade.php -->
<h3 class="text-2xl font-bold mb-4">Reviews</h3>
@forelse ($booking->reviews as $review)
    <div class="bg-gray-100 p-4 rounded mb-4">
        <div class="flex items-center mb-2">
            <span class="font-bold">{{ $review->user->name }}</span>
            <span class="ml-2 text-yellow-500">Rating: {{ $review->rating }}</span>
        </div>
        <p>{{ $review->comment }}</p>
    </div>
@empty
    <p>No reviews yet.</p>
@endforelse
