@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p class="card-text"><small class="text-muted">Data uscita: {{ $movie->date }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection
