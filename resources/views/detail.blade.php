@extends('layout.app')

@section('title', $movies->title)

@section('content')
<div class="content-box">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img class="details-image" src="{{ asset('storage/images/'.$movies->photo)}}" />
                </div>
                <div class="col-sm">
                    <h1>{{$movies->title}}</h1>
                    <h3><i class="fa fa-star yellow" aria-hidden="true"></i> {{$movies->rating}} / 5</h3>
                    <p>{{$movies->description}}</p>
                    <p>Category : <a href="/genre/{{$movies->genre_id}}">{{$movies->genre->name}}</a></p>
                </div>
                <div class="col-sm">
                    <h1>Episodes</h1>
                    <table class="table table-hover table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Episode #</th>
                            <th scope="col">Title</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($episodes as $episode)
                            <tr>
                                <th scope="row">{{$episode->episode}}</th>
                                <td>{{$episode->title}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{ $episodes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
