<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Book 1',
            'title' => 'Good Book 1',
            'description' => 'Book 1 is good !',
            'price' => 1200,
            'discount' => 10,
            'review' => '4.5 stars',
            'category_id' => 1, 
            'user_id' => 1,
            'image' => "1732693495_6746cdf717f13_book.jpg",
        ]);

        Product::create([
            'name' => 'Book 2',
            'title' => 'Good Book 2',
            'description' => 'Book 2 is good !',
            'price' => 20,
            'discount' => 5,
            'review' => '4.2 stars',
            'category_id' => 2, 
            'user_id' => 1,
            'image' => "1732693495_6746cdf717f13_book.jpg",
        ]);

        Product::create([
            'name' => 'Book 3',
            'title' => 'Good Book 3',
            'description' => 'Book 3 is good !',
            'price' => 15,
            'discount' => 2,
            'review' => '4.8 stars',
            'category_id' => 3, 
            'user_id' => 1,
            'image' => "1732693495_6746cdf717f13_book.jpg",
        ]);
    }
}
