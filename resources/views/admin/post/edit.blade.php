@extends('admin.layouts.main')
@section('title','AdminCategories')
@section('sub-title','Categories')
@section('content')
    <div class="row mt-5 ml-2">
        <form action="{{route('admin.post.update',$post['id'])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('admin.includes.errors')
            <div class="card-body">
                <div class="form-group">
                    <label>Title of Category</label>
                    <input type="text" class="form-control" name="title" value="{{$post['title']}}">
                </div>
                <div class="form-group">
                                        <textarea name="content" id="summernote" cols="20"
                                                  rows="20">{{$post['content']}}</textarea>
                </div>
                <div class="form-group w-50">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="main_image">
                            <label class="custom-file-label" for="exampleInputFile">Добавьте главное
                                изображение</label>
                        </div>
                    </div>
                    <img src="{{asset('storage/'. $post['main_image'])}}" class="w-50 mt-3">
                </div>
                <div class="form-group">
                    <label>Выберите категорию</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option
                                value="{{$category['id']}}" {{$category['id'] == $post['category_id'] ? 'selected' : ''}}>{{$category['title']}}</option>
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
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
@endsection
