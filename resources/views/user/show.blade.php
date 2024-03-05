@extends('layouts.main')
@section('content')
    <div>

        <div>{{ $user->id }} . {{ $user->name }}</div>
        <br>
        <div>{{ $user->content }}</div>

        <div>
            <a href="{{ route('user.edit', $user->id) }}"> Edit</a>
        </div>

        <div>
            <form action="{{ route('user.delete', $user->id) }}" method="post">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form>
        </div>

        <div>
            <a href="{{ route('user.index') }}">Back</a>
        </div>

    </div>
@endsection
