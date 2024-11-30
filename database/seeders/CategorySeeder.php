<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Electronics',
            'image' => '1732592100_674541e4b0632_cat.jpg',
            'user_id' => 1,
        ]);

        Category::create([
            'name' => 'Fashion',
            'image' => '1732592100_674541e4b0632_cat.jpg',
            'user_id' => 1,
        ]);

        Category::create([
            'name' => 'Books',
            'image' => '1732592100_674541e4b0632_cat.jpg',
            'user_id' => 1,
        ]);
    }
}
