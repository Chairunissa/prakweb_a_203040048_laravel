@extends('layouts.main')
@section('container')
<article>
  <h2>{{ $post->title }}</h2>
  <!-- <h5>{{ $post["author"] }}</h5> -->
  <p>By. Chairunissa in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name   }}</a></p>

  {!! $post->body !!}
</article>
<a href="/blog">Back to posts</a>
@endsection