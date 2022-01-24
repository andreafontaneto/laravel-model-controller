@extends('layouts.main')

@section('content')

<div class="container">
  <h1>MOVIES</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITOLO</th>
        <th scope="col">TITOLO ORIGINALE</th>
        <th scope="col">NAZIONALITA'</th>
        <th scope="col">DATA</th>
        <th scope="col">VOTO</th>
      </tr>
    </thead>
    <tbody>
      
      @forelse ($movies as $movie)
      <tr>
        <th scope="row">{{ $movie->id }}</th>
        <td>{{ $movie->title }}</td>
        <td>{{ $movie->original_title }}</td>
        <td>{{ $movie->nationality }}</td>
        <td>{{ $movie->date }}</td>
        <td>{{ $movie->vote }}</td>
      </tr>  
      @empty
        <h4>Nessun risultato trovato</h4>
      @endforelse
      
    </tbody>
  </table>

</div>
  
@endsection