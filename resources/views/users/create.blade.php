<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>
    <form action="{{ route('/users.store') }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="">Name:</label>
            <input type="text" name="name" placeholder="Name" required>
        </div>
        <br>
        <div>
            <label for="">Email:</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <br>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div>
            <input type="submit" value="Save a New User"/>
        </div>
    
    </form>

</body>

</html>