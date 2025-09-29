<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('categories')->insert([
        ['name' => 'Science', 'description' => 'Books about science', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Technology', 'description' => 'Tech related books', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'History', 'description' => 'Historical books', 'created_at' => now(), 'updated_at' => now()],
    ]);
}

}

