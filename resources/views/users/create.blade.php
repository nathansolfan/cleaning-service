<x-layout title="User List">
    <h1>Create User</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </div>
    @endif
    <form method="POST" action="{{ route('users.store')}}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required >
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <button type="submit">Create Account</button>
    </form>
    <a href=" {{ route('users.index')}} ">Back to List</a>
</x-layout>
