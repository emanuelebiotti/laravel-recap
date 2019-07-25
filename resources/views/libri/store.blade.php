@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Nuovo prodotto inserito con successo</h1>

    <a class="btn btn-primary" href="{{ route('libri.index') }}">Torna ai libri</a>
  </div>
@endsection
