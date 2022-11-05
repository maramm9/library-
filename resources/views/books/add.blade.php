@extends('main')
@section('contant')
<div class="container">
  <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="mb-3">
            <label  class="form-label">Book Name</label>
            <input type="text" class="form-control" name="name" >
          </div>
          <div class="mb-3">
            <label class="form-label">Writer</label>
            <input type="text" class="form-control"  name="writer">
          </div>
          <button type="submit" class="btn btn-danger">Add</button>
    </form>
</div>
@endsection