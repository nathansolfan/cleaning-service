<!-- resources/views/services/show.blade.php -->

<x-form-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-5xl font-bold text-center mb-8 text-gray-800">{{ $service->name }}</h1>

        <div class="bg-white p-8 rounded-lg shadow-md border border-gray-200 max-w-2xl mx-auto">
            <p class="text-gray-600 mb-6">{{ $service->description }}</p>
            <p class="text-xl font-bold text-green-600 mb-6">£{{ number_format($service->price, 2) }} per hour</p>
            <a href="{{ route('bookings.create', ['service' => $service->id]) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg">Book This Service</a>
        </div>
    </div>
</x-form-layout>
