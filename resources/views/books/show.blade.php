@extends('main')
@section('contant')

<div class="card-body">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">writer name</th>
        <th scope="col">owner </th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
      <tr>
        <th scope="row">{{$book->id}}</th>
        <td>{{$book->name}}</td>
        <td>{{$book->writer_name}}</td>
        <td>{{$book->user->name}}</td>
        <td>
          @if ($book->status == 0) 
            متاح
          @else 
            غير متاح
          
          @endif
        </td>
        <td>
          <form method="post" action="{{route('books.destroy',$book->id)}}">
            @csrf
            @method('DELETE')
              <a href="{{route('books.edit',$book->id)}}" class="btn btn-danger btn-sm">Edite</a>
              <input type="submit" class="btn btn-danger btn-sm" value="delete"/>
              <a href="{{route('books.show',$book->id)}}" class="btn btn-success btn-sm">Borrow</a>
              <a href="{{route('details',$book->id)}}" class="btn btn-success btn-sm">Details</a>

          </form>
      </td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
  @endsection



 