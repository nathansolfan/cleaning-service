<x-layout title="User List">

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
            <a href="{{ route('users.show', $user->id) }}">View</a>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        </li>
        @endforeach
    </ul>
    <a href=" {{route('users.create')}} ">Create new User</a>
</x-layout>

