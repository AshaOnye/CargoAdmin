<!-- resources/views/admin/register.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
</head>
<body>

<h2>Admin Registration</h2>

<form method="POST" action="{{ url('/admin/register') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

</body>
</html>
