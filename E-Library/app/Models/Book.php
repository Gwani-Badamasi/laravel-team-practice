<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * This allows safe bulk insert/update for these fields.
     */
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'published_year',
        'category_id',
        'description',
        'cover_image',
    ];

    /**
     * Relationship: A book belongs to one category.
     * Example: $book->category;
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
