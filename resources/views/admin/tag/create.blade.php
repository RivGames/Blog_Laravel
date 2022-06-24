@extends('admin.layouts.main')
@section('title','AdminTags')
@section('sub-title','Create a new Tag!')
@section('content')
    <form action="{{route('admin.tag.store')}}" method="POST">
        @csrf
        @include('admin.includes.errors')
        <div class="card-body">
            <div class="form-group">
                <label>Title of tag</label>
                <input type="text" class="form-control" name="title" placeholder="Enter a tag title">
            </div>
            <button type="submit" class="btn btn-primary">create</button>
        </div>
    </form>
@endsection
