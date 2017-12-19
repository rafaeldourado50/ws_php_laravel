@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Golden BookStore</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('books.create') }}"> Create Book</a>
      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($books as $book)
      <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->description}}</td>
        <td>
          <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a>
          <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>
          <a class="btn btn-danger" href="/books/{{$book->id}}/delete" data-token="{{csrf_token()}}">Delete</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection