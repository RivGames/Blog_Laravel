@extends('layouts.app')
@section('content')
    <div class="container-scroller">
        <div class="main-panel">
            <div class="container">
                <div class="world-news">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-flex position-relative  float-left">
                                <h3 class="section-title">{{$post['title']}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative image-hover">
                        <img
                            src="{{asset('storage/' . $post['main_image'])}}"
                            class="img-fluid w-50"
                        />
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2 float-left">
                            {!! $post['content'] !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2 float-left">
                            Создан: {{$post['created_at']}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
