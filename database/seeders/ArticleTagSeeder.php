<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(10, function ($number) {
            Article::inRandomOrder()->first()->categories()->syncWithoutDetaching(Tag::inRandomOrder()->first());
        });
    }
}