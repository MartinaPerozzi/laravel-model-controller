<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE -->
    <title>{{ env('APP_NAME') }} Movie List</title>
    {{-- Includo il file con tutti i file compilati da Vite --}}
    @vite ('resources/js/app.js')

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}"> Home </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="container mt-4">
            <h1>Movies</h1>
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
        </section>
    </main>



</body>

</html>
