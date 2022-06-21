@extends('admin.layouts.main')
@section('title','AdminCategories')
@section('sub-title','Categories')
@section('content')
    <div class="row mt-5 ml-2">
        <form action="{{route('admin.category.update',$category['id'])}}" method="POST">
            @csrf
            @method('PATCH')
            @include('admin.includes.errors')
            <div class="card-body">
                <div class="form-group">
                    <label>Title of Category</label>
                    <input type="text" class="form-control" name="title" value="{{$category['title']}}">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
@endsection
