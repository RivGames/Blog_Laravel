@extends('admin.layouts.main')
@section('title','AdminPosts')
@section('sub-title','Posts')
@section('content')
    <a href="{{route('admin.post.create')}}">
        <button class="btn btn-primary ml-1">Let`s create a post!</button>
    </a>
    <div class="row mt-5 ml-2">
        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th>ID:</th>
            </tr>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post['title']}}</td>
                    <td><a href="{{route('admin.post.show',$post['id'])}}" class="text-success">Дивитися</a>
                    </td>
                    <td><a href="{{route('admin.post.edit',$post['id'])}}" class="text-warning">Редагувати</a>
                    </td>
                    <td>
                        <form action="{{route('admin.post.delete',$post['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
