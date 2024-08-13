<x-form-layout title="Create Booking">
    <div class="container mx-auto py-12">
        <h1 class="text-5xl font-bold text-center mb-12 text-gray-800">Our Premium Cleaning Services</h1>

        <!-- Dynamic Services Section -->
        <h2 class="text-4xl font-bold text-center mb-8 text-gray-800">Customizable Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">
            @foreach($services as $service)
                <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center mb-6">
                        <h2 class="text-3xl font-bold text-blue-600">{{ $service->name }}</h2>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                    <p class="text-xl font-bold text-green-600 mb-6">£{{ number_format($service->price, 2) }} per hour</p>
                    <a href="{{ route('services.show', $service->id) }}" class="block text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mb-2">Learn More</a>
                    <a href="{{ route('bookings.create', ['service' => $service->id]) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg">Book Now</a>
                </div>
            @endforeach
        </div>

        <!-- Hardcoded Services Section -->
        <h2 class="text-4xl font-bold text-center mb-8 text-gray-800">Standard Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Classic Regular Cleaning -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Classic Regular Cleaning</h2>
                <p class="text-gray-600 mb-4">Keep your home spotless with our regular cleaning sessions, tailored to your schedule and needs.</p>
                <ul class="list-disc list-inside mb-6 text-gray-700">
                    <li>Weekly or bi-weekly cleaning sessions</li>
                    <li>Ironing services available</li>
                    <li>Consistent cleaning with the same cleaner</li>
                </ul>
                <p class="text-xl font-bold text-green-600 mb-6">£16.90 per hour</p>
                <a href="{{ route('services.show', ['service' => 'Classic Regular Cleaning']) }}" class="block text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mb-2">Learn More</a>
                <a href="{{ route('bookings.create', ['service' => 'Classic Regular Cleaning']) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Book Now</a>
            </div>

            <!-- Classic One-Off Cleaning -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Classic One-Off Cleaning</h2>
                <p class="text-gray-600 mb-4">Perfect for when you need your home to shine before or after an event.</p>
                <ul class="list-disc list-inside mb-6 text-gray-700">
                    <li>Thorough cleaning of all rooms</li>
                    <li>Spot cleaning and dusting</li>
                    <li>Kitchen and bathroom deep cleaning</li>
                </ul>
                <p class="text-xl font-bold text-green-600 mb-6">£18.90 per hour</p>
                <a href="{{ route('services.show', ['service' => 'Classic One-Off Cleaning']) }}" class="block text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mb-2">Learn More</a>
                <a href="{{ route('bookings.create', ['service' => 'Classic One-Off Cleaning']) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Book Now</a>
            </div>

            <!-- Deep Cleaning -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">Deep Cleaning</h2>
                <p class="text-gray-600 mb-4">An intensive cleaning service that targets every nook and cranny, leaving your home pristine.</p>
                <ul class="list-disc list-inside mb-6 text-gray-700">
                    <li>Detailed cleaning of all surfaces</li>
                    <li>Appliance and furniture cleaning</li>
                    <li>Carpet and upholstery steam cleaning</li>
                </ul>
                <p class="text-xl font-bold text-green-600 mb-6">£24.90 per hour</p>
                <a href="{{ route('services.show', ['service' => 'Deep Cleaning']) }}" class="block text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mb-2">Learn More</a>
                <a href="{{ route('bookings.create', ['service' => 'Deep Cleaning']) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Book Now</a>
            </div>

            <!-- End of Tenancy Cleaning -->
            <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-3xl font-bold text-blue-600 mb-4">End of Tenancy Cleaning</h2>
                <p class="text-gray-600 mb-4">Ensure your property is spotless and meets landlord standards with our thorough end of tenancy cleaning service.</p>
                <ul class="list-disc list-inside mb-6 text-gray-700">
                    <li>Comprehensive cleaning of all rooms</li>
                    <li>Deep cleaning of carpets, floors, and surfaces</li>
                    <li>Guaranteed to meet landlord or agent requirements</li>
                </ul>
                <p class="text-xl font-bold text-green-600 mb-6">£24.90 per hour</p>
                <a href="{{ route('services.show', ['service' => 'End of Tenancy Cleaning']) }}" class="block text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mb-2">Learn More</a>
                <a href="{{ route('bookings.create', ['service' => 'End of Tenancy Cleaning']) }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Book Now</a>
            </div>
        </div>

        <!-- Back to Home Link -->
        <div class="text-center mt-12">
            <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 font-bold">Back to Home</a>
        </div>
    </div>
</x-form-layout>
