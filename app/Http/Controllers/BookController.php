<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function index()
    {
        $all_books = Book::orderBy('id', 'DESC')->get();
        return view('libri.tutti', compact('all_books'));
    }


    public function create()
    {
      return view('libri.create');
    }


    public function store(Request $request)
    {
      $validateData = $request->validate([
        'title'=>'required|max:255|min:5',
        'author'=>'required|max:255|min:5',
        'price'=> 'required|numeric|between:0,999.99'
      ]);

      $dati = $request->all();

      $new_book = new Book;
      // $new_book->title = $dati['title'];
      // $new_book->author = $dati['author'];
      // $new_book->price = $dati['price'];
      $new_book->fill();
      $new_book->save();

      return redirect()->route('libri.index');

    }


    public function show($book_id)
    {
      $book = Book::find($book_id);
      if(empty($book)) {
        return view('errors.404');
      }
      return view('libri.show', compact('book'));
    }


    public function edit($book_id)
    {
      $book = Book::find($book_id);
      if(empty($book)) {
        return view('errors.404');
      }
      return view('libri.edit', compact('book'));
    }


    public function update(Request $request, $book_id)
    {
      $validateData = $request->validate([
        'title'=>'required|max:255|min:5',
        'author'=>'required|max:255|min:5',
        'price'=> 'required|numeric|between:0,999.99'
      ]);
      $dati = $request->all();

      $book = Book::find($book_id);
      $book->update($dati);
      return redirect()->route('libri.index');
    }


    public function destroy($book_id)
    {
      $book = Book::find($book_id);
      $book->delete();
      return redirect()->route('libri.index');
    }
}
