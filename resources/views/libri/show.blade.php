@extends('layouts.app')
@section('page_title', 'visualizza libro')

@section('content')
  <div class="container">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Libro numero: {{ $book->id }}</h5>
        <h1 class="card-title">{{ $book->title }}</h1>
        <p class="card-text"> Autore: {{ $book->author }}</p>
        <p class="card-text"> Prezzo: {{ $book->price }} euro</p>
        <a href="{{ route('libri.index') }}" class="btn btn-primary">Torna ai libri</a>
      </div>
    </div>
  </div>


@endsection
