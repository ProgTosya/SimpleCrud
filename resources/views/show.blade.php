@extends('layout')
@section('title', 'User info')
@section('content')
<div class="card">
    <div class="card-header">
        Name: {{$user->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$user->email}}</h5>
      <p class="card-text">ID = {{$user->id}}</p>
      <p class="card-text">Created: {{$user->created_at}}</p>
      <p class="card-text">Updated: {{$user->updated_at}}</p>
      <form method="POST" action="{{route('users.destroy', $user)}}">
        <a href="{{route('users.index')}}" class="btn btn-primary">Go back</a>
        <a type="Button" class="btn btn-warning" href="{{route('users.edit', $user)}}">Edit</a> 
        @csrf
        @method('DELETE')
        <button type="Submit" class="btn btn-danger">Delete</button> 
      </form>
    </div>
  </div>
@endsection