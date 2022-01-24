@extends('layouts.main')

@section('content')

<main class="container">

  <div class="welcome-message my-5">
    <h2>Ciao {{ $name }} {{ $surname }}!</h2>
    <h5>Ecco la lista di film scelti per te</h5>
  </div>

  <div class="af-cards-box">
    @forelse ($movies as $movie)
    <div class="card af-card" style="width: 18rem;">
      <img src="https://betravingknows.com/wp-content/uploads/2017/06/video-movie-placeholder-image-grey.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">{{ $movie->title }}</h3>
        <h5 class="card-title">{{ $movie->original_title }}</h5>
        <p class="card-text">{{ $movie->nationality }}</p>
        <p class="card-text">{{ $movie->date }}</p>
        <p class="card-text">{{ $movie->vote }}</p>
        <span href="#" class="badge bg-secondary">ID: {{ $movie->id }}</span>
      </div>
    </div>
    @empty
      <h4>Nessun risultato trovato</h4>
    @endforelse
  </div>
  

</main>
  
@endsection