@extends('layout')
@section('title', 'Users')
@section('content')
<a href="{{route('users.create')}}" class="btn btn-success" role="button">Create User</a>
<table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>
              <a href="{{route('users.show', $user)}}">{{$user->name}}</a> 
            </td>
            <td>
              <a href="{{route('users.show', $user)}}">{{$user->email}}</a> 
            </td>
            <td>
            <form method="POST" action="{{route('users.destroy', $user)}}">
              <a type="Button" class="btn btn-warning" href="{{route('users.edit', $user)}}">Edit</a> 
              @csrf
              @method('DELETE')
              <button type="Submit" class="btn btn-danger">Delete</button> 
            </form>
          </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{$users->links()}}
@endsection