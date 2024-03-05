@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('user.update', $user->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Name</label><br>
                <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{ $user->name }}">
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label><br>
                <input name="email" type="text" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input name="password" type="text" class="form-control" id="password" placeholder="Password" value="{{ $user->password }}">
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
