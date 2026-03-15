<h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>Email: {{ auth()->user()->email }}</p>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>