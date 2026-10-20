<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - IT Student Portal</title>
</head>
<body>

    <h1>Create an Account</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <label>Full Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
        <br><br>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>

</body>
</html>

