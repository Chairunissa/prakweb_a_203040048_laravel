@extends('layouts.main')
@section('container')

<h2>{{ $post->title }}</h2>
<!-- <h5>{{ $post["author"] }}</h5> -->
<p>By. <a href="#" class="text-decoration-none">
    {{ $post->user->name }}
  </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name   }}</a></p>

{!! $post->body !!}

<a href="/blog" class="d-block mt-3">Back to posts</a>
@endsection