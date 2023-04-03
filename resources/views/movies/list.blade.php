@extends('layouts.app')

@section('page_name', 'Movie List')

@section('card_content')
    <div class="row row-cols-4">
        @forelse ($movies as $movie)
            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <span class="card-text">{{ $movie->nationality }}</span>
                        <span>{{ $movie->date }}</span>
                        <span>{{ $movie->vote }}</span>
                    </div>
                </div>
            </div>
        @empty
            <h3>No movies found</h3>
        @endforelse
    </div>

@endsection
