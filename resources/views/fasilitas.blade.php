@extends('layouts/main')

@section('container')
  <h1 class="text-center">Fasilitas</h1>


<div class="row ">
    @foreach ($posts as $post)
  <div class="col-md-4 py-2">
    <div class="card" style="width: 18rem; height:15rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body pb-3">
        <h5 class="card-title text-center">{{ $post->title }}</h5>
        <p class="card-text text-center">{{ $post->excerpt }}</p>
        <a href="/fasilitas/{{ $post->id }}" class="btn btn-primary d-flex justify-content-center">Selengkapnya</a>
      </div>
    </div>
  </div>


    @endforeach
  </div>
@endsection