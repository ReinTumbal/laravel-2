@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5" >{{$post->title}}</h1>

    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{$post->author->name}}</a> In 
            <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->nama}}</a></p>

    {!! $post->body !!}

</article>
<a href="/blog"class="text-decoration-none">Back to Posts</a>
@endsection
