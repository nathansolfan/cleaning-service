<x-layout title="Login">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md mx-auto mt-10 border border-gray-300">
        <h2 class="text-3xl font-bold mb-6 text-gray-800">Login</h2>
        <form method="POST" action="{{ route('login.post') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password:</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-blue-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150" onclick="this.disabled=true;this.innerHTML='Logging in...'; this.form.submit();">Login</button>
            </div>
        </form>
    </div>
</x-layout>
