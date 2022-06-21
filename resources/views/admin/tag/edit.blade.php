@extends('admin.layouts.main')
@section('title','AdminTags')
@section('sub-title','Tags')
@section('content')
    <div class="row mt-5 ml-2">
        <form action="{{route('admin.tag.update',$tag['id'])}}" method="POST">
            @csrf
            @method('PATCH')
            @include('admin.includes.errors')
            <div class="card-body">
                <div class="form-group">
                    <label>Title of tag</label>
                    <input type="text" class="form-control" name="title" value="{{$tag['title']}}">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
@endsection
