<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ArticleMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(100, function ($number) {
            Article::inRandomOrder()->first()->images()->syncWithoutDetaching(Media::inRandomOrder()->first());
        });
    }
}