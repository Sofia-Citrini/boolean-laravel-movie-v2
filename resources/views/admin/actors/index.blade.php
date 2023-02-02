@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="my-3">Lists Actors</h1>

<a class="btn btn-warning my-3" href="{{route('admin.actors.create')}}">Crea un nuovo progetto</a>
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>surname</th>
        <th>birth of date</th>
        <th>thumb</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($actors as $actor)
        <tr>
          <td>{{ $actor->id }}</td>
          <td><img src="{{ $actor->thumb }}" alt="" style="width: 60px"></td>
          <td>{{ $actor->name }}</td>
          <td>{{ $actor->surname }}</td>
          <td>{{ $actor->birth_date }}</td>
          
          <td>
            <div class="d-flex gap-2 ">
              <a href="{{ route('admin.actors.edit', $actor->id) }}" class="btn btn-primary">E</a>
              <a href="{{ route('admin.actors.show', $actor->id) }}" class="btn btn-info">S</a>
              <form action="{{route('admin.actors.destroy', $actor->id)}}" method="POST">
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