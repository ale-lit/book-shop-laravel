<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $primaryKey = 'author_id';

    protected $fillable = [
        'author_fio',
        'author_is_deleted'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'books_authors', 'book_author_author_id', 'book_author_book_id');
    }
}
