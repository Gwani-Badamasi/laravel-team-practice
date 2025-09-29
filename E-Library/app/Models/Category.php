<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * This allows bulk insert/update on these fields safely.
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Relationship: A category can have many books.
     * Example: $category->books;
     */
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
