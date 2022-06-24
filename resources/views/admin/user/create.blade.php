@extends('admin.layouts.main')
@section('title','AdminUsers')
@section('sub-title','Create a User!')
@section('content')
    <form action="{{route('admin.user.store')}}" method="POST">
        @csrf
        @include('admin.includes.errors')
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter a name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="{{old('password')}}">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password1" value="{{old('password1')}}">
            </div>
            <div class="form-group">
                <label>Виберіть категорію</label>
                <select name="role" class="form-control">
                    @foreach($roles as $id => $role)
                        <option value="{{$id}}" {{$id == old('role_id') ? 'selected' : ''}}>{{$role}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">ok</button>
        </div>
    </form>
@endsection
