@extends('admin.layouts.main')
@section('title','AdminCategories')
@section('sub-title','Create a Category!')
@section('content')
    <form action="{{route('admin.category.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Title of Category</label>
                <input type="text" class="form-control" name="title" placeholder="Enter category title">
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </div>
    </form>
@endsection
