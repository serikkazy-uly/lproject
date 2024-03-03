<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>
    <h1>Create User</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
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
        <button type="submit" value="Save New User">Submit</button>
    </div>
</form>

</body>

</html>