@extends('layouts.app')


@section('content')
<h1>This is Student page</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Address</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $item)
          <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->fullname}}</td>
            <td>{{$item->birthday}}</td>
            <td>{{$item->address}}</td>
            <td><a href="students/{{$item->id}}/edit" class="btn btn-outline-info">Edit</a></td>
            <td><form action="/students/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" Onclick="return ConfirmDelete();" class="btn btn-outline-danger">
                    Delete
                </button>
            </form></td>    
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="students/create" class="btn btn-primary">Add a new student</a>
      <script>
        function ConfirmDelete()
        {
          var x = confirm("Are you sure you want to delete?");
          if (x)
              return true;
          else
            return false;
        }
    </script>    
@endsection