<?php

namespace Database\Seeders;

use App\Models\Topic;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ArticleTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(10, function ($number) {
            Article::inRandomOrder()->first()->topics()->syncWithoutDetaching(Topic::inRandomOrder()->first());
        });
    }
}