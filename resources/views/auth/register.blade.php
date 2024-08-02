<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

    <form method="POST" action="{{ route('register.post')}}" >
        @csrf
        <input type="name" name="name" required>
        <input type="email" name="email" required>
        <input type="password" name="password" required>
        <input type="password" name="password_confirmation" required>
        <button type="submit">Register</button>
    </form>

</body>
</html>



