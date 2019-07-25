@extends('layouts.app')
@section('page_title', 'tutti i libri')

@section('content')

<div class="container">
  <h1>Tutti i libri</h1>
  <a class="btn btn-primary" href="{{ route('libri.create')}}">Aggiungi nuovo</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Autore</th>
        <th scope="col">Prezzo</th>
        <th colspan="3" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($all_books as $book)
      <tr>
        <td>{{ $book->id}}</td>
        <td>{{ $book->title}}</td>
        <td>{{ $book->author}}</td>
        <td>{{ $book->price }}</td>
        <td> <a class="btn btn-primary" href="{{ route('libri.show', $book->id) }}">Visualizza</a> </td>
        <td> <a class="btn btn-warning" href="{{ route('libri.edit', $book->id) }}">Modifica</a> </td>
        <td>
        <form class="" action="{{ route('libri.destroy', $book->id) }}" method="post">
          @method('DELETE')
          @csrf
          <input type="submit" class="btn btn-danger" value="Cancella">
        </form>
        </td>
      </tr>
      @empty
      <td colspan="4">{{ 'non ci sono prodotti' }}</td>
    @endforelse
    </tbody>
  </table>
</div>



@endsection
