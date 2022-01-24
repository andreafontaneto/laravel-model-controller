@extends('layouts.main')

@section('content')

<div class="container">
  
  <h1>HOME</h1>
  {{-- <h3>Ciao {{ $name }} {{ $surname }}!</h3> --}}

  @forelse ($movies as $movie)
  <div class="card" style="width: 18rem;">
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
  
@endsection