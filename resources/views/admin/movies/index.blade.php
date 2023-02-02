@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="my-3">Lists Project</h1>

<a class="btn btn-warning my-3" href="{{route('admin.movies.create')}}">Crea un nuovo progetto</a>
  <table class="table">
    <thead>
      <tr>
        <th>titolo</th>
        <th>genere</th>
        <th>cover</th>
        <th>descrizione</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
        <tr>
          <td>{{ $movie->id }}</td>
          <td><img src="{{ $movie->cover_img }}" alt="" style="width: 60px"></td>
          <td>{{ $movie->title }}</td>
          <td>{{ $movie->description }}</td>
          
          <td>
            <div class="d-flex gap-2 ">
              <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-primary">E</a>
              <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-info">S</a>
              <form action="{{route('admin.projects.destroy', $movie->id)}}" method="POST">
                @csrf()
                @method('delete')
                <button class="btn btn-danger">De</button>
              </form>
            </div>
            
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>




</div>

@endsection