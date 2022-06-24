@extends('admin.layouts.main')
@section('title','AdminUsers')
@section('sub-title','Users')
@section('content')
    <a href="{{route('admin.user.create')}}">
        <button class="btn btn-primary ml-1">Создати юзера</button>
    </a>
    <div class="row mt-5 ml-2">
        <table class="table table-striped">
            <tr>
                <th>Ім'я юзера</th>
            </tr>
            <tbody>
            @foreach($user as $user)
                <tr>
                    <td>{{$user['name']}}</td>
                    <td><a href="{{route('admin.user.show',$user['id'])}}" class="text-success">Дивитися юзера</a>
                    </td>
                    <td><a href="{{route('admin.user.edit',$user['id'])}}" class="text-warning">Редагувати</a>
                    </td>
                    <td>
                        <form action="{{route('admin.user.delete',$user['id'])}}" method="POST">
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
