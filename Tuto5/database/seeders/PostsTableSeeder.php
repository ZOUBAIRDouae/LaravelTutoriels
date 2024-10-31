<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'body' => 'This is the first post',
            'category_id' => 1,
        ]);
    }
}
