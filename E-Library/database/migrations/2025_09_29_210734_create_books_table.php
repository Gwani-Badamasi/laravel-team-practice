<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method creates the 'books' table when you run "php artisan migrate".
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); 
            // Auto-increment primary key

            $table->string('title'); 
            // Book title (required)

            $table->string('author'); 
            // Author name (required)

            $table->string('isbn')->unique()->nullable(); 
            // ISBN (must be unique if provided, but nullable since not all books may have one)

            $table->year('published_year')->nullable(); 
            // Year of publication (nullable, useful for flexibility)

            $table->unsignedBigInteger('category_id'); 
            // Foreign key to categories.id

            $table->text('description')->nullable(); 
            // Book description/summary (optional)

            $table->string('cover_image')->nullable(); 
            // File path or URL for book cover (optional)

            $table->timestamps(); 
            // created_at & updated_at

            // Define foreign key constraint
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('cascade'); 
            // If a category is deleted, all related books are also deleted
        });
    }

    /**
     * Reverse the migrations.
     * This method drops the 'books' table when you run "php artisan migrate:rollback".
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
