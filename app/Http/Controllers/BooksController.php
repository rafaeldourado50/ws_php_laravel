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
  
  public function store(Request $request) {
    Book::create($request->all());
    return redirect()->route('books.index')
                        ->with('success', 'Book created successfully');
  }
  
  public function show($id) {
    $book = Book::find($id);
    return view('books.show',compact('book'));
  }

  public function edit($id) {
    $book = Book::find($id);
    return view('books.edit',compact('book'));
  }

  public function update(Request $request, $id) {
    Book::find($id)->update($request->all());
    return redirect()->route('books.index')
                        ->with('success', 'Book updated successfully');
  }

  public function destroy($id) {
    Book::find($id)->delete();
    return redirect()->route('books.index')
                        ->with('success', 'Book deleted successfully');
  }
}
