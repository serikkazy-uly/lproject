<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>

    <form method="POST" action="{{ route('user.update', ['user' => $user])}}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="name" id="name" name="name" value="{{ $user->name }}" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br><br>
        <button type="submit" value="Update">Update</button>
    </form>
</body>
</html>
