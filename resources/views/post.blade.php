@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        
            <h2> {{ $post->title }} </h2>
            <p>By. <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }} " class="text-decoration-none"> {{ $post->category->name }}</a> </p>
            <img src="https://picsum.photos/1200/400?{{$post->category->name}}" class="img-fluid" alt="{{$post->category->name}}">
        <article class="my-3">
            <p> {!! $post->body !!} </p>
        </article>
        <a href="/blog" class="display-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>



@endsection