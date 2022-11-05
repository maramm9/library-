@extends('main')
@section('contant')
<div class="container">
<form method="post" action="{{route('borrow')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="card">
          <div class="card-header">
              Book Name : <input value="{{$books->name}}" name="book"><label></label>
          </div>
          <ul class="list-group list-group-flush ">
             <li class="list-group-item d-flex justify-content-around">
                  <label>from : <input name="from" value="{{$books->user->name}}" ></label>
                  <label>To :</label> <input name="to" value="{{Auth::user()->name}}">
             </li>
             <li class="list-group-item  d-flex justify-content-evenly">Place to Meet : <input name="place">
            </li>
             <li class="list-group-item">Borrowing Period :
                <input type="date" name="date">
             </li>
             <li class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger">Confirm</button>
                
            </li>
        </ul>

    </div>
</form>
</div>
 @endsection