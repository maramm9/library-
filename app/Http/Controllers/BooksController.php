<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Books;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
  
    public function index()
    {
        $books =Book::all();
        return view('books.show')->with('books',$books);
    }

    public function create()
    {  
        return view('books.add');   
    }

    
    public function store(Request $request)
    {
        Book::create([
            'name' => $request->name,
            'writer_name' => $request->writer,
            'user_id' =>Auth::user()->id,
            'status'=> $request->has('status'),
           ]);
       return redirect()->route('books.index');
        }


    public function show(Book $books,$id)
    {
        $books = Book::find($id);
        return view('books.borrow',compact('books'));
    }

  
        public function edit($id)
        {
            $book = Book::find($id);
            // dd($books);
            // $book = $books;
            return view('books.edite',compact('book'));
        }

   
        public function update(Request $request,$id)
        {
            $books = Book::find($id);
            $user = User::where('name',$request->user_id)->first();
            $books->update([
                'name'=>$request->name,
                'writer_name'=>$request->writer_name,
                'user_id'=>$user->id,
                'status'=> $request->status,
            ]);
            return redirect()->route('books.index');
        }

  
        public function destroy(Book $book)
        {
            $book->delete();
            return redirect()->route('books.index')->with('success','book deleted successfuly');
        }

    
}
