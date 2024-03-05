@extends('layouts.main')
@section('content')
<div>
    <form>
        <div class="form-group">
          <label for="user">User</label><br>
          <input type="text" class="form-control" id="user" placeholder="User">
        </div>
       <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection