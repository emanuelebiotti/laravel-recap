<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    public function index() {

      $data = [
        'nome' => 'Sofia',
        'cognome' => 'Perlari',
        'studenti' => ['Giuseppe', 'Giancarlo', 'Antonello']
      ];
      return view('home', $data);
    }

    /*public function index() {
      $data = [
        'nome' => 'Sofia',
        'cognome' => 'Perlari',
        'studenti' => ['Giuseppe', 'Giancarlo', 'Antonello']
      ];
      return view('home', $data);
    }*/

    /*public function tutti() {
      $all_books = Book::where('id', '>', 0)
      ->orderBy('title', 'DESC')
      ->limit(2)
      ->get();

      return view('libri.tutti', compact('all_books'));
    } */
}
