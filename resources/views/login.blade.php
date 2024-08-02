<form action="POST" action="{{ }}" >
    @csrf
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
