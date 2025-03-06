<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Khởi tạo Faker
        $faker = Faker::create();

        // Chèn 100 dòng dữ liệu giả mạo vào bảng 'products'
        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word . ' ' . $faker->word, 
                // 'id' => $faker,
                'price' => $faker->randomFloat(2, 50, 1000), // Giá gốc
                'image' => $faker->imageUrl(640, 480, 'products', true), // URL ảnh ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
