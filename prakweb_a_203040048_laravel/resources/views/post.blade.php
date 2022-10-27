@extends('layouts.main')
@section('container')

<h2>{{ $post->title }}</h2>
<!-- <h5>{{ $post["author"] }}</h5> -->
<p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
    {{ $post->author->name }}
  </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name   }}</a></p>

{!! $post->body !!}

<a href="/blog" class="d-block mt-3">Back to posts</a>
@endsection