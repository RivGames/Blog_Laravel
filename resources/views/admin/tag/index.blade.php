@extends('admin.layouts.main')
@section('title','AdminTags')
@section('sub-title','Tags')
@section('content')
    <a href="{{route('admin.tag.create')}}">
        <button class="btn btn-primary ml-1">Let`s create a tag!</button>
    </a>
    <div class="row mt-5 ml-2">
        <table class="table table-striped">
            <tr>
                <th>Title of tag</th>
            </tr>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag['title']}}</td>
                    <td><a href="{{route('admin.tag.show',$tag['id'])}}" class="text-success">Дивитися</a>
                    </td>
                    <td><a href="{{route('admin.tag.edit',$tag['id'])}}" class="text-warning">Редагувати</a>
                    </td>
                    <td>
                        <form action="{{route('admin.tag.delete',$tag['id'])}}" method="POST">
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
