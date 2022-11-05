<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'writer_name',
        'user_id',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function borrow()
    {
        return $this->hasOne(Borrow::class);
    }
}
