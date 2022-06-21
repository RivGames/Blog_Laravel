@extends('admin.layouts.main')
@section('title','AdminCategories')
@section('sub-title','Categories')
@section('content')
    <a href="{{route('admin.category.create')}}">
        <button class="btn btn-primary ml-1">Let`s create a category!</button>
    </a>
    <div class="row mt-5 ml-2">
        <table class="table table-striped">
            <tr>
                <th>Title of category</th>
            </tr>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category['title']}}</td>
                    <td><a href="{{route('admin.category.show',$category['id'])}}" class="text-success">Дивитися</a>
                    </td>
                    <td><a href="{{route('admin.category.edit',$category['id'])}}" class="text-warning">Редагувати</a>
                    </td>
                    <td>
                        <form action="{{route('admin.category.delete',$category['id'])}}" method="POST">
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
