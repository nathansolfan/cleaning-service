<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    <header>

    </header>

    <main>
        {{ $slot}}
    </main>

    <footer>


    </footer>

</body>
</html>
