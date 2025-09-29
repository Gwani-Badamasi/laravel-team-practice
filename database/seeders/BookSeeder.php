<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('books')->insert([
        [
            'title' => 'Introduction to Computer Science',
            'author' => 'John Doe',
            'isbn' => '1234567890',
            'published_year' => 2020,
            'category_id' => 2, // Technology
            'description' => 'Basic concepts of CS',
            'cover_image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
}

}
