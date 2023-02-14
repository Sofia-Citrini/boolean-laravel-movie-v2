@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="my-3">Lists Project</h1>

  <a class="btn btn-warning my-3" href="{{route('admin.movies.create')}}">Crea un nuovo progetto</a>
  <div class="container border rounded-3 shadow-lg">
    <table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>copertina film</th>
          <th>titolo</th>
          <th>descrizione</th>
          <th></th>

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
                <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                <a href="{{ route('admin.movies.show', $movie->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                <form action="{{route('admin.movies.destroy', $movie->id)}}" method="POST">
                  @csrf()
                  @method('delete')
                  <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
              </div>
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>




</div>

@endsection