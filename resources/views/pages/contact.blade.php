<x-layout title="Contact">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto mt-10 border border-gray-300 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Contact Us</h1>
        <p class="text-gray-600 mb-8">Get in touch with us...</p>

        @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
            {{session('success')}}
        </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="mb-4">
                <label for="message">Message</label>
                <textarea name="message" id="message" required class="w-full border border-gray-300 p-2 rounded"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Send message</button>
        </form>
    </div>
</x-layout>
