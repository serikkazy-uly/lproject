@extends('layout')

@section('content')

@foreach ($posts as $post)
    <div>
        <h3> {{$post->title}}</h3>
        <p>{{$post->content}}</p>
    </div>
@endforeach

{{ $posts->links()}}
    
@endsection
 