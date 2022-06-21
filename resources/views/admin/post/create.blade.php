@extends('admin.layouts.main')
@section('title','AdminCategories')
@section('sub-title','Create a Category!')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group" class="w-25">
                                <label>Имя Поста</label>
                                <input type="text" name='title' class="form-control" placeholder="Название Поста"
                                       value="{{old('title')}}">
                                <div class="form-group">
                                        <textarea name="content" id="summernote" cols="20"
                                                  rows="20">{{old('content')}}</textarea>
                                </div>
                                @include('admin.includes.errors')
                                <div class="form-group w-50">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image">
                                            <label class="custom-file-label" for="exampleInputFile">Добавьте главное
                                                изображение</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Выберите категорию</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category['id']}}" {{$category['id'] == old('category_id') ? 'selected' : ''}}>{{$category['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group w-50">
                                    <label>Выберите тэги</label>
                                    <select class="select2" name="tag_ids[]" multiple="multiple"
                                            data-placeholder="Выбрать тэг" style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag['id']}}">{{$tag['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Добавить">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
