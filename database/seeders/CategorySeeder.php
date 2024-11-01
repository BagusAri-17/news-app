<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Health'
            ],
            [
                'category_name' => 'Politics'
            ],
            [
                'category_name' => 'Food'
            ],
        ];

        Category::insert($categories);
    }
}
