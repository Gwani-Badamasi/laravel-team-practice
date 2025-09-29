<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ✅ Using updateOrInsert so we don't create duplicates
        // If a category with the same "name" exists, it will update it instead of inserting again.

        DB::table('categories')->updateOrInsert(
            ['name' => 'Science'], // Condition to check
            [
                'description' => 'Books about science',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('categories')->updateOrInsert(
            ['name' => 'Technology'],
            [
                'description' => 'Tech related books',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('categories')->updateOrInsert(
            ['name' => 'History'],
            [
                'description' => 'Historical books',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
