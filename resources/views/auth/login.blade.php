l
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IT Student Portal</title>
</head>
<body>

    <h1>Login to Your Account</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>

</body>
</html>

