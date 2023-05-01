@extends('layout')
@section('title', isset($user) ? 'Update '.$user->name : 'Create user')
@section('content')
<form method="POST" 
@if (isset($user))
action="{{route('users.update', $user)}}"
@else 
action="{{route('users.store')}}" 
@endif>
@isset($user)
  @method('PUT')
@endisset
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" name="name"
        value = "{{ old('name', isset($user) ? $user->name : null) }}"  
         class="form-control" id="formGroupExampleInput" placeholder="input name">
        @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Email</label>
        <input type="text" name="email"
        value = "{{ old('email', isset($user) ? $user->email : null) }}" 
         class="form-control" id="formGroupExampleInput2" placeholder="input mail">
         @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="d-grid gap-2 col-6 mx-auto">
        @if (@isset($user))
        <button type="submit" class="btn btn-primary">Update</button>
        @else
        <button type="submit" class="btn btn-primary">Create</button>
        @endif
        <a href="{{route('users.index')}}" class="btn btn-danger">Back</a>
      </div>
  
</form>


@endsection