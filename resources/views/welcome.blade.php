@extends('layout')

@section('content')

@foreach ($errors->all() as $error)
{{$error}} <br>
@endforeach

<form action="/test" method="post">
    <input type="text" name="title" value="{{old('title')}}"><br>
    <input type="text" name="desc" value="{{old('desc')}}">><br>
    @csrf
    <button type="submit">Submit</button>
</form>

@endsection
 