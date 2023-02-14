@extends('layouts.app')

@section('content')
<div>
    <div class="text-center pt-2 mt-4">
        <h1 class="text-dark">MODIFICA FILM</h1>
    </div>
    {{-- Validazione Dati --}}
    @if($errors->any())
    <div>
        <div class="alert alert-danger">I dati inseriti non sono validi:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="container border rounded-3 shadow p-5">
        <form action="{{ route('admin.movies.store') }}" method="POST" class="p-5 border rounded-3 shadow-lg text-center">
            @csrf

            <label class="form-label">Inserisci link immagine: </label>
            <input type="text" name="cover_img" class="text-center w-75 mx-auto form-control mb-4 @error('cover_img') is-invalid @enderror"
            value="{{ $errors->has('cover_img') ? '' : old('cover_img') }}">
            @error('cover_img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <label class="form-label">title: </label>
            <input type="title" name="title" class="text-center w-75 mx-auto form-control mb-4 @error('title') is-invalid @enderror"
            value="{{ $errors->has('title') ? '' : old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label class="form-label">description: </label>
            <textarea name="description" id="" cols="30" rows="10" class="w-75 mx-auto form-control mb-4 @error('description') is-invalid @enderror">
                {{ $errors->has('description') ? '' : old('description') }}
            </textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-3">Aggiungi</button>
            </div>
        </form>
        <div class="text-center">
            <a href="{{route("admin.movies.index")}}"><button class="btn btn-secondary mt-5">Torna alla Home</button></a>
        </div>
    </div>
</div>
@endsection