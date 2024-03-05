<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite('resources/css/app.css')
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
                    <li><a href="{{ route('main.index') }}">Main</a><br></li>
                        <li> <a href="{{ route('about.index') }}">About</a><br></li>
                        <li> <a href="{{ route('user.index') }}">Users</a></li>
                </ul>
            </nav>
        </div>

        <div class="container">
            @yield('content')
        </div>
</body>
</html>