@extends('layouts.app')


@section('content')
    <h1>This is Student create</h1>
    <a href="/students" class="btn btn-primary">Home</a>
    <form action="/students" method="POST">
        @csrf       

        <div class="mb-3">
          <p style="color: red">
            @error('fullname')
              {{$message}}
            @enderror</p>
            <label for="" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" id="" aria-describedby="">
        </div>

          <div class="mb-3">
            <p style="color: red">
              @error('birthday')
                {{$message}}
              @enderror</p>
            <label for="" class="form-label">Birthday</label>
            <input type="text" class="form-control" name="birthday" id="" aria-describedby="">
          </div>
          <div class="mb-3">
            <p style="color: red">
              @error('address')
                {{$message}}
              @enderror</p>
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="" aria-describedby="">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        
      </form>
@endsection