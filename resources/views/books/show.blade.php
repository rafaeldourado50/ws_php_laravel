@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <h2>Show Book</h2>
    </div>
  </div>

  <table class="table table-bordered">
    <tr>
      <td><b>Title</b></td>
      <td>{{$book->title}}</td>
    </tr>
    <tr>
      <td><b>Description</b></td>
      <td>{{$book->description}}</td>
    </tr>
  </table>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="pull-right">
      <a class="btn btn-danger" href="{{ route('books.index') }}"> Back</a>  
    </div>
  </div>
@endsection