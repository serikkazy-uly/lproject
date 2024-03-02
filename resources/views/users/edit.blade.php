<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
