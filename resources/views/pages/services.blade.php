<!-- resources/views/pages/services.blade.php -->

<x-layout title="Choose your cleaning session">
    <div class="container mx-auto py-8 flex">
        <!-- Services List -->
        <div class="w-3/4 pr-8">
            <h2 class="text-3xl font-bold mb-6">Choose your cleaning session</h2>
            <div class="grid grid-cols-1 gap-6">
                <!-- Service Card 1 -->
                @foreach ( $services as $service )


                <div class="bg-white p-6 rounded-lg shadow-md border-2 border-orange-500">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Classic regular cleaning</h3>
                            <p class="text-xl text-red-600">£16.90/h <span class="line-through text-gray-500">£18.90/h</span></p>
                            <ul class="list-disc pl-5 mt-2 text-gray-600">
                                @foreach ( $service->features as $feature )
                                <li> {{$feature}} </li>
                                @endforeach
                            </ul>
                        </div>
                        @if ($service->popular)
                        <div>
                            <span class="block bg-yellow-400 text-black text-sm font-bold py-1 px-3 rounded mt-2">Popular</span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Basket/Selection Summary -->
        <div class="w-1/4 bg-gray-100 p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold mb-4">My basket</h3>
            <p id="selected-address"><strong>Address:</strong>Westminster Road </p>
            <hr class="my-4">
            <h4 class="text-lg font-bold mb-2">Cleaning</h4>
            <p id="selected-service">Select a Service</p>
            <p id="selected-price" class="font-bold">£0/h</p>
            <hr class="my-4">
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded w-full" id="proceed-button" disabled>Proceed</button>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');
            const basketService = document.querySelectorAll('.selected-card');
            const basketPrice = document.querySelectorAll('.service-price');
            const proceedButton = document.querySelectorAll('.proceed-button');

            serviceCards.forEach(card => {
                card.addEventListener('click', function() {
                    serviceCards.forEach(c => c.classList.remove('border-orange-500'));
                    this.classList.add('border-orange-500');

                    basketService.textContent = this.dataset.name;
                    basketPrice.textContent = `£${this.dataset.price}/h`;
                    proceedButton.disabled = false;
                });
            });
        });
    </script>
</x-layout>
