<form action="POST" action="{{}}" >
    @csrf
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <input type="password" name="password_confirmation" required>
    <button type="submit">Login</button>
</form>
