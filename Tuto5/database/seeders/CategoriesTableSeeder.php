<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use League\Csv\Reader;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->count(10)->create();
        Category::factory()->count(5)->active()->create();
    }
}
