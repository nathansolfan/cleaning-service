<!-- resources/views/components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Title' }}</title>
    @vite('resources/css/app.css')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <x-navbar />
     <!-- Display global alerts -->
     <div class="container mx-auto mt-4">
        <x-alert />
    </div>
    <x-hero />
    <x-cards />
    <x-testimonials />
    <main class="flex-grow">
        {{ $slot }}
    </main>
    <x-footer />
</body>
</html>
