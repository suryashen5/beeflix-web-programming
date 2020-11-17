@extends('layout.app')

@section('title', $genre->name)

@section('content')
<div class="content-box">
    <div class="container">
        <div class="header">
            <h3>{{$genre->name}}</h3>
        </div>
        <div class="row row-cols-4 movie-card">
            @foreach($genre->movie as $movie)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-white bg-dark mb-3" style="width: 22rem;">
                    <img class="card-img-top image" src="{{ asset('storage/images/'.$movie->photo)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <a href="/movies/{{$movie->id}}" class="btn btn-secondary">LIHAT FILM</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
