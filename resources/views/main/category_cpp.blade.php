@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Category:C++</h1>
                @foreach($posts as $post)
                    <article>
                        <header class="mb-4">
                            <h1 class="fw-bolder mb-1">{{$post['title']}}</h1>
                            <div class="text-muted fst-italic mb-2">{{$post['created_at']}}</div>
                        </header>
                        <figure class="mb-4"><img class="img-fluid rounded w-50"
                                                  src="{{asset('storage/' . $post['main_image'])}}"/></figure>
                        <a href="{{route('main.show',$post['id'])}}" style="text-decoration:none">
                            <section class="mb-5">
                                <p class="fs-5 mb-4">{{Illuminate\Support\Str::limit(strip_tags($post['content']),35)}}</p>
                            </section>
                        </a>
                    </article>
                @endforeach
@endsection
