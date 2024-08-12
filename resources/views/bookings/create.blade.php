<!-- resources/views/bookings/create.blade.php -->

<x-form-layout title="Create Booking">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Create Booking</h2>
        <div class="flex">
            <!-- Booking Form -->
            <div class="w-3/4">
                <form method="POST" action="{{ route('bookings.store') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="service_type" class="block text-gray-700 font-semibold mb-2">Service Type:</label>
                        <select id="service_type" name="service_type" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" onchange="updateBasket()">
                            <option value="Classic Regular Cleaning" data-price="16.90">Classic Regular Cleaning</option>
                            <option value="Classic One-Off Cleaning" data-price="18.90">Classic One-Off Cleaning</option>
                            <option value="Deep Cleaning" data-price="24.90">Deep Cleaning</option>
                        </select>
                    </div>
                    <div>
                        <label for="postcode" class="block text-gray-700 font-semibold mb-2">Postcode:</label>
                        <input type="text" id="postcode" name="postcode" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" onblur="updateBasket()">
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
                        <input type="text" id="autocomplete" name="address" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
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

            <!-- Basket Summary -->
            <div class="w-1/4 bg-gray-100 p-6 rounded-lg shadow-md ml-6">
                <h3 class="text-xl font-bold mb-4">Booking Summary</h3>
                <div id="basket-summary">
                    <p><strong>Service:</strong> <span id="basket-service">None</span></p>
                    <p><strong>Price:</strong> £<span id="basket-price">0.00</span></p>
                    <p><strong>Postcode:</strong> <span id="basket-postcode">Not provided</span></p>
                </div>
            </div>
        </div>
    </div>

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

        function updateBasket() {
            const serviceSelect = document.getElementById('service_type');
            const selectedService = serviceSelect.options[serviceSelect.selectedIndex].text;
            const price = serviceSelect.options[serviceSelect.selectedIndex].getAttribute('data-price');
            const postcode = document.getElementById('postcode').value;

            document.getElementById('basket-service').innerText = selectedService;
            document.getElementById('basket-price').innerText = price;
            document.getElementById('basket-postcode').innerText = postcode ? postcode : 'Not provided';
        }

        // Ensure the Google Maps API is fully loaded before running initAutocomplete
        window.onload = function() {
            initAutocomplete();
            updateBasket(); // Initial call to set basket values
        };
    </script>
</x-form-layout>
