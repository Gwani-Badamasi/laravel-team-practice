<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ✅ First, get the Technology category dynamically
        // This avoids hardcoding "category_id = 2"
        $technologyCategory = DB::table('categories')->where('name', 'Technology')->first();

        if ($technologyCategory) {
            // ✅ Insert book safely without duplication
            // Using updateOrInsert so it won’t create duplicates if run multiple times
            DB::table('books')->updateOrInsert(
                ['isbn' => '1234567890'], // condition: book identified by unique ISBN
                [
                    'title' => 'Introduction to Computer Science',
                    'author' => 'John Doe',
                    'published_year' => 2020,
                    'category_id' => $technologyCategory->id, // ✅ dynamically linked
                    'description' => 'Basic concepts of CS',
                    'cover_image' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
