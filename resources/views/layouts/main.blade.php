<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @foreach($users as $user)
        <tr>

            <div>
                <td>{{ $user->name }}</td>

            </div>
<br>
            <div>

                <td>{{ $user->email }}</td>
            </div><br>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                <form method="POST" action="{{ route('user.delete', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach --}}

        <div>
            <nav>
                <ul>
                    <li>
                        <a href="/main">Main</a>
                        <a href="/about">About</a>
                        <a href="/users">Users</a>
                        {{-- <a href=""></a> --}}
                    </li>
                </ul>
            </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>
</body>
</html>