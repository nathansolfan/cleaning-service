<!-- resources/views/components/hero.blade.php -->
<section class="relative bg-cover bg-center h-screen text-white" style="background-image: url('{{ asset('images/bg.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container mx-auto h-full flex flex-col justify-center items-center text-center relative z-10">
        <h1 class="text-5xl font-bold mb-4">Our Cleaning Service</h1>
        <p class="text-xl mb-8">Providing top-notch cleaning services for your home and office.</p>
        <a href="{{ route('services') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Our Services</a>
    </div>
</section>

<!-- Add the input field for address/postcode lookup -->
<div class="container mx-auto mt-8">
    <input id="autocomplete" placeholder="Enter your address or postcode" type="text" class="w-full p-2 border rounded">
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

    // Ensure the Google Maps API is fully loaded before running initAutocomplete
    window.onload = function() {
        initAutocomplete();
    };
</script>
