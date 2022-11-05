<?php

namespace App\Http\Controllers;

use view;
use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function index(){
        $books =Book::all();
        return view('books.mine')->with('books',$books);
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('home');
        
     }

    public function borrow(Request $request){
        // $user = User::where('name',$request->from)->first();
        // $user1 = User::where('name',$request->to)->first();
        $users = User::whereIn('name',[$request->from,$request->to])->get();
        $book = Book::where('name',$request->book)->first();
        // dd($users[0]);
        Borrow::create([
            'user_id' => $users[0]->id,
            'book_id' => $book->id,
            'borrow_id' => $users[1]->id,
            'place'=> $request->place,
            'date'=> $request->date,
           ]);
           $book->update([
            'status' => true,
           ]);
           return redirect()->route('books.index');
    }

    public function details($id){
        $book = Book::find($id);
        // dd($book);
        $boorow = Borrow::where('book_id',$book->id)->first();
        return view('books.details',compact('book','boorow'));
    }

}