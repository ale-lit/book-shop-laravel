<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';

    protected $fillable = [
        'book_name',
        'book_price',
        'book_publisher_id',
        'book_year',
        'book_genre_id',
        'book_is_deleted'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'book_publisher_id', 'publisher_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'book_genre_id', 'genre_id');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'books_authors', 'book_author_book_id', 'book_author_author_id');
    }
}
