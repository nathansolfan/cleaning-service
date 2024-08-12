<!-- resources/views/services/create.blade.php -->

<x-layout>
    <div class="container">
        <h1>Add New Service</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Service Type:</label>
                <select id="name" name="name" class="form-control" required onchange="updatePrice()">
                    <option value="Classic Regular Cleaning" data-price="16.90">Classic Regular Cleaning</option>
                    <option value="Classic One-Off Cleaning" data-price="18.90">Classic One-Off Cleaning</option>
                    <option value="Deep Cleaning" data-price="24.90">Deep Cleaning</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Price (£):</label>
                <input type="text" id="price" name="price" class="form-control" required readonly>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Service</button>
        </form>
    </div>

    <script>
        // Automatically update the price based on the selected service
        function updatePrice() {
            var select = document.getElementById('name');
            var price = select.options[select.selectedIndex].getAttribute('data-price');
            document.getElementById('price').value = price;
        }

        // Set the initial price when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            updatePrice();
        });
    </script>
</x-layout>
