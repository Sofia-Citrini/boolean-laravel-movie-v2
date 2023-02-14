@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center py-5">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$movie->cover_img}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <p class="card-text">{{$movie->description}}</p>
          <a href="{{route('admin.movies.index')}}" class="btn btn-primary">Go in Index</a>
        </div>
      </div>
    </div>
@endsection
