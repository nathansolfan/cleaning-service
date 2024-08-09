<!-- resources/views/components/form-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Title' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

     <!-- Display global alerts -->
    <div class="container mx-auto mt-4">
        <x-alert />
    </div>
    <main class="flex-grow">
        {{ $slot }}
    </main>

</body>
</html>
