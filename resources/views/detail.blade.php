@extends('layouts/main')

@section('container')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="/fasilitas">Back to posts</a>
</div>
    

@endsection