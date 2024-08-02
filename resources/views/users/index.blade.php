<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>User List</h1>

    @if (session('success'))
    <p> {{session('success')}} </p>
    @endif

    <ul>
        @foreach ($users as $user )
        <li>
            <span> {{$user->name}} ( {{$user->email}} ) </span>
            <form action=" {{route('user.destroy', '$user->id')}}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
