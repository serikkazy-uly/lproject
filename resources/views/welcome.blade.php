@extends('layout')

@section('content')
<form action="/test" method="post">
    @csrf
    <input type="text" name="title">
    <button type="submit">Submit</button>
</form>
@endsection