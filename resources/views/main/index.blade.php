@extends('layouts.layout')
@section('content')
    <div class="container-scroller">
        <div class="main-panel">
            <div class="container">
                <div class="world-news">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex position-relative  float-left">
                                <h3 class="section-title">Пости</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2 float-left">
                            @foreach($posts as $post)
                                <div class="position-relative image-hover mt-5">
                                    <img
                                        src="{{asset('storage/' . $post['main_image'])}}"
                                        class="img-fluid"
                                    />
                                    <span class="thumb-title">{{$post->category->title}}</span>
                                </div>
                                <h5 class="font-weight-bold mt-3">
                                    {{$post['title']}}
                                </h5>
                                <p class="fs-15 font-weight-normal">
                                    {{Illuminate\Support\Str::limit(strip_tags($post['content']),35)}}
                                </p>
                                <a href="{{route('main.show',$post['id'])}}" class="font-weight-bold text-dark pt-2"
                                >Читати</a
                                >
                            @endforeach
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
