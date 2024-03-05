@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('user.create') }}"  class="btn btn-success mb-3">Add User</a>
        </div>
        
        @foreach ($users as $user)
            <div><a href="{{ route('user.show', $user->id) }}"> {{ $user->id }} . {{ $user->name }}</div>
        @endforeach
    </div>
@endsection
