<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'published_year',
        'category_id',
        'description',
        'cover_image'
    ];

    // A book belongs to one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

