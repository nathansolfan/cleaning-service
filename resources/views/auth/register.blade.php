<x-layout title="Create User">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Register</h2>
        <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name">
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
            </div>
            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Confirm your password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150" onclick="this.disabled=true;this.innerHTML='Registering...'; this.form.submit();">Register</button>
            </div>
        </form>
    </div>
</x-layout>
