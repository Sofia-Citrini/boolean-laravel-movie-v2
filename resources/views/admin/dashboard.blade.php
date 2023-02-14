@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="d-flex justify-content-between mt-3 align-items-end">
                        Since you are logged in, look for the index
                        <a class="text-decoration-none text-black" href="{{route('admin.movies.index')}}"><button class="btn btn-primary">Index</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
