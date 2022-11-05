<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'borrow_id',
        'place',
        'date',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function books(){
        return $this->belongsTo(Book::class,'book');
    }

}

