@extends('main')
@section('contant')

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
      @if($book->user->id === Auth::user()->id)
      <tr>
        <th scope="row">{{$book->user->id}}</th>
        <td>{{$book->name}}</td>
        <td>{{$book->writer_name}}</td>
        <td>{{$book->user->name}}</td>
        <td>
          @if($book->status == 0)
          متاح
          @else
          غير متاح
          @endif
        </td>
        <td><a href="{{route('books.edit',$book)}}" class="btn btn-danger btn-sm">Edite</a>
            <a href="{{route('books.destroy',$book->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
     </tr>
     @endif
     @endforeach
    
    </tbody>
  </table>
  @endsection



 