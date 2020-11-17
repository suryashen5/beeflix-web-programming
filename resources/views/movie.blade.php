@extends('layout.app')

@section('title', 'Movie List')

@section('content')
<div class="content-box">
    <div class="container">
        <div class="header">
            <h3>Drama <a href="/genre/1" type="button" class="btn btn-light right">FILTER</a></h3>
        </div>
        <div class="row row-cols-4">
            @foreach($movies as $movie)
                @if($movie->genre_id == 1)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card text-white bg-dark mb-3" style="width: 22rem;">
                        <img class="card-img-top image" src="{{ asset('storage/images/'.$movie->photo)}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <a href="/movies/{{$movie->id}}" class="btn btn-secondary">LIHAT FILM</a>
                        </div>
                      </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="header">
            <h3>TV Show <a href="/genre/2" type="button" class="btn btn-light right">FILTER</a></h3>
        </div>
        <div class="row row-cols-4">
            @foreach($movies as $movie)
                @if($movie->genre_id == 2)
                <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-white bg-dark mb-3" style="width: 22rem;">
                    <img class="card-img-top image" src="{{ asset('storage/images/'.$movie->photo)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <a href="/movies/{{$movie->id}}" class="btn btn-secondary">LIHAT FILM</a>
                    </div>
                  </div>
                </div>
                @endif
            @endforeach
        </div>
      </div>

    <div class="container">
        <div class="header">
            <h3>Kids <a href="/genre/3" type="button" class="btn btn-light right">FILTER</a></h3>
        </div>
        <div class="row row-cols-4 movie-card">
            @foreach($movies as $movie)
                @if($movie->genre_id == 3)
                <div class="col-12 col-md-6 col-lg-4">
                <div class="card text-white bg-dark mb-3" style="width: 22rem;">
                    <img class="card-img-top image" src="{{ asset('storage/images/'.$movie->photo)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <a href="/movies/{{$movie->id}}" class="btn btn-secondary">LIHAT FILM</a>
                    </div>
                  </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

@endsection
