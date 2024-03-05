@extends('layouts.main') 
@section('content')
<div>
    <form action="{{ route('user.store') }}" method="post">
        {{-- {{ csrf_field() }} --}}
@csrf
        <div class="form-group">
          <label for="name">Name</label><br>
          <input name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
       <br>
       <div class="form-group">
        <label for="email">Email</label><br>
        <input name="email" type="text" class="form-control" id="email" placeholder="Email">
      </div>
     <br>
     <div class="form-group">
        <label for="password">Password</label><br>
        <input  name="password" type="text" class="form-control" id="password" placeholder="Password">
      </div>
     <br>

       <button type="submit" class="btn btn-primary">Create</button>
      </form>
</div>
@endsection