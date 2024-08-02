<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors as $error )
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action=" {{ route('users.update', $user->id )}} ">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value=" {{$user->name}} " required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value=" {{$user->email}} " required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">Update</button>
    </form>

</body>
</html>
