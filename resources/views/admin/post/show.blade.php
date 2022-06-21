@extends('admin.layouts.main')
@section('title','AdminPosts')
@section('sub-title','Post#')
@section('content')
    <ul class="list-group">
        <li class="list-group-item">ID:{{$post['id']}}</li>
        <li class="list-group-item">Title:{{$post['title']}}</li>
        <li class="list-group-item">Content:{{$post['content']}}</li>
        <li class="list-group-item">Category:{{$post['category_id']}}</li>
    </ul>
@endsection
