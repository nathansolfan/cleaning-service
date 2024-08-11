<!-- resources/views/components/hero.blade.php -->
<section class="relative bg-cover bg-center h-[50vh] text-white" style="background: -webkit-linear-gradient(180deg, #f50f26, #d67a24, #ffffff); background: linear-gradient(180deg, #f50f26, #d67a24, #f0e0e2);">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="container mx-auto h-full flex flex-col justify-center items-center text-center relative z-10">
        <h1 class="text-5xl font-bold mb-4 shadow-lg">Our Cleaning Service</h1>
        <p class="text-xl mb-8 shadow-lg">Providing top-notch cleaning services for your home and office.</p>
        <a href="{{ route('services') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition transform hover:scale-105">Our Services</a>
    </div>
</section>

