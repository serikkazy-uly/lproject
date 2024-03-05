@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $user->id }} . {{ $user->name }}</div>
        <br>
        <div>{{ $user->content }}</div>

        <div><a href="{{ route('user.index') }}">Back</a></div>
    </div>
@endsection
