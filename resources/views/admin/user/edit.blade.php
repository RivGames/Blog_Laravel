@extends('admin.layouts.main')
@section('title','AdminUsers')
@section('sub-title','User')
@section('content')
    <div class="row mt-5 ml-2">
        <form action="{{route('admin.user.update',$user['id'])}}" method="POST">
            @csrf
            @method('PATCH')
            @include('admin.includes.errors')
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$user['name']}}">
                </div>
                <div class="form-group">
                    <label>Выберите тип пользователя</label>
                    <select name="role" class="form-control">
                        @foreach($roles as $id => $role)
                            <option value="{{$id}}" {{$id == $user['role'] ? 'selected' : ''}}>{{$role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{$user['id']}}">
                </div>
                <button type="submit" class="btn btn-primary">ok</button>
            </div>
        </form>
    </div>
@endsection
