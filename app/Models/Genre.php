<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $primaryKey = 'genre_id';

    protected $fillable = [
        'genre_name'
    ];

    public function books()
    {
        return $this->hasOne(Book::class, 'book_genre_id', 'genre_id');
    }
}
