<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;

class BooksController extends Controller {
  
  public function index() {
    $books = Book::all();
    return view('books.index', compact('books'));
  }
  
  public function create() {
    return view('books.create');
  }
  
  public function store() {
    $input = request()->input();
    $book = Book::create($input);
    
    if ($book) {
      return redirect('books');
    }
  }
}
