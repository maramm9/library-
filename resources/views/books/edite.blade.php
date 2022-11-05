@extends('main')
@section('contant')
<div class="container">
    <form action="{{route('books.update',$book->id)}}" method="post" >
      {{ csrf_field() }}
        @method('PUT')

        <div class="mb-3">
            <label  class="form-label">Book Name</label>
            <input type="text" class="form-control" name="name"  value="{{$book->name}}" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Writer</label>
            <input type="text" class="form-control"  name="writer_name"  value="{{$book->writer_name}}" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label" >Owner</label>
            <input type="text" class="form-control" name="user_id"  value="{{$book->user->name}}" autofocus>
          </div>
          <label class="form-label" >status :</label><br>
          <label class="form-label">Borrow</label>
          <div class="container">
            <input type="hidden" name="status" value="0">
            <input type="checkbox" name="status" 
                   {{$book->status||old('status',0) ===1 ? 'checked' : ''}}><br>
          </div>
          <button type="submit" class="btn btn-danger">Update</button>
    </form>
</div>
@endsection