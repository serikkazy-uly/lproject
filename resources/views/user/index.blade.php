@extends('layouts.main')
@section('content')
<div>
    @foreach ($users as $user )
    <div>{{ $user->id }} . {{ $user->name }}</div>
    @endforeach
</div>
@endsection