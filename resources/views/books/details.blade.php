@extends('main')
@section('contant')
<div class="container">
      <div class="card">
          <div class="card-header">
              Book Name : <input value="{{$book->name}}" name="book"><label></label>
          </div>
          <ul class="list-group list-group-flush ">
             <li class="list-group-item d-flex justify-content-around">
                  <label>from : <input name="from" value="{{$book->user->name}}" ></label>
                  <label>To :</label> <input name="to" value="{{Auth::user()->name}}">
             </li>
             <li class="list-group-item  d-flex justify-content-evenly">Place to Meet :
                 <input name="place" value="{{$boorow->place}}">
            </li>
             <li class="list-group-item">Borrowing Period :
                <input type="date" name="date">
             </li>
            </li>
        </ul>
    </div>
</div>
 @endsection