<section class="relative bg-cover bg-center h-screen text-white" style="background-image: url('{{ asset('images/your-background-image.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto h-full flex flex-col justify-center items-center text-center relative z-10">
        <h1 class="text-5xl font-bold mb-4">Welcome to Our Cleaning Service</h1>
        <p class="text-xl mb-8">Providing top-notch cleaning services for your home and office.</p>
        <a href="{{ route('services') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Our Services</a>
    </div>
</section>
