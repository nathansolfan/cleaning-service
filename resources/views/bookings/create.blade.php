<x-form-layout title="Create Booking">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Create Booking</h2>
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
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150">Create Booking</button>

                <a href=" {{ route('home')}} " class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-150">Cancel</a>
            </div>
        </form>
    </div>
</x-form-layout>
<!-- Include the Google Places API Script -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>

<!-- Add the initAutocomplete function -->
<script>
    function initAutocomplete() {
        const input = document.getElementById('autocomplete');
        const autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.setFields(['address_component', 'formatted_address']);

        autocomplete.addListener('place_changed', function () {
            const place = autocomplete.getPlace();

            let addressComponents = {};
            place.address_components.forEach(component => {
                const types = component.types;
                if (types.includes('street_number')) {
                    addressComponents.street_number = component.long_name;
                }
                if (types.includes('route')) {
                    addressComponents.route = component.long_name;
                }
                if (types.includes('locality')) {
                    addressComponents.locality = component.long_name;
                }
                if (types.includes('postal_code')) {
                    addressComponents.postal_code = component.long_name;
                }
                if (types.includes('country')) {
                    addressComponents.country = component.long_name;
                }
            });

            console.log('Address Components:', addressComponents);
        });
    }

    // Ensure the Google Maps API is fully loaded before running initAutocomplete
    window.onload = function() {
        initAutocomplete();
    };
</script>
