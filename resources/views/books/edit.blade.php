@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <h2>Edit Book</h2>
    </div>
  </div>

  <form action="{{ route('books.update', $book->id) }}" method="POST">
    <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2">
        <div class="form-group">
          <strong>Title:</strong>
        </div>
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
          <input type="text" name="title" value="{{$book->title}}" placeholder="Title" required>
        </div>
      </div>
      <div class="col-xs-2 col-sm-2 col-md-2">
        <div class="form-group">
          <strong>Description:</strong>
        </div>
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10">
        <div class="form-group">
          <textarea name="description" rows="5" cols="25" placeholder="Description" required>{{$book->description}}</textarea>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="pull-left">
          <button type="submit" class="btn btn-success">Save</button>
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <div class="pull-right">
          <a class="btn btn-danger" href="{{ route('books.index') }}">Back</a>
        </div>
      </div>
    </div>
  </form>
@endsection