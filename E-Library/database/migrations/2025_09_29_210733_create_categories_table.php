<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * This method is executed when you run "php artisan migrate".
     * It creates the 'categories' table with the defined columns.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key (id BIGINT UNSIGNED)
            
            $table->string('name')->unique();  
            // Category name (must be unique, e.g. Science, Technology, History)

            $table->text('description')->nullable();  
            // Optional description for the category (can be NULL)

            $table->timestamps();  
            // Adds created_at and updated_at columns automatically
        });
    }

    /**
     * Reverse the migrations.
     * This method is executed when you run "php artisan migrate:rollback".
     * It drops the 'categories' table.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
