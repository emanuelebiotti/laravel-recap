@extends('layouts.app')
@section('page_title', 'inserisci libro')

@section('content')
<div class="container mt-5">

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="post" action="{{ route('libri.store') }}">
    @csrf
    <div class="form-group">
      <label for="title">Titolo del libro</label>
      <input type="text" class="form-control" name="title" placeholder="Insierisci il titolo del libro" value="{{ old('title') }}">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nome dell'autore</label>
      <input type="text" class="form-control" name="author" placeholder="Inserisci il nome dell'autore" value="{{ old('author') }}">
      @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Prezzo del libro</label>
      <input type="text" class="form-control" name="price" placeholder="Inserisci il prezzo del libro" value="{{ old('price') }}">
      @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
