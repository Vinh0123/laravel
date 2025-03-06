<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Add some sample categories
        DB::table('categories')->insert([
            [
                'parent_id' => 0, // Root category
                'lft' => 1,
                'rgt' => 6,
                'depth' => 0,
                'name' => 'Electronics',
                'slug' => 'electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1, // Electronics sub-category
                'lft' => 2,
                'rgt' => 3,
                'depth' => 1,
                'name' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 1, // Electronics sub-category
                'lft' => 4,
                'rgt' => 5,
                'depth' => 1,
                'name' => 'Laptops',
                'slug' => 'laptops',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 0, // Another root category
                'lft' => 7,
                'rgt' => 8,
                'depth' => 0,
                'name' => 'Clothing',
                'slug' => 'clothing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 4, // Clothing sub-category
                'lft' => 8,
                'rgt' => 9,
                'depth' => 1,
                'name' => 'Men\'s Fashion',
                'slug' => 'mens-fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}