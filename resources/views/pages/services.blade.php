<!-- resources/views/pages/services.blade.php -->
<x-layout title="Our Services">
    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Our Services</h1>
        <!-- Service details here -->

        <!-- Display Reviews for this service -->
        <h2 class="text-3xl font-bold text-gray-800 mt-8 mb-4">Customer Reviews</h2>
        @forelse($reviews as $review)
            <div class="bg-gray-100 p-4 rounded mb-4">
                <div class="flex items-center mb-2">
                    <span class="font-bold">{{ $review->user->name }}</span>
                    <span class="ml-2 text-yellow-500">Rating: {{ $review->rating }}</span>
                </div>
                <p>{{ $review->comment }}</p>
            </div>
        @empty
            <p>No reviews yet for this service.</p>
        @endforelse
    </div>
</x-layout>
