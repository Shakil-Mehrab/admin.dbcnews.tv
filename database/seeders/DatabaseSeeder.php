<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(2)->create();
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ArticleSeeder::class);
        \App\Models\Video::factory(10)->create();
        \App\Models\Tag::factory(5)->create();
        $this->call(TopicSeeder::class);
        $this->call(ArticleCategorySeeder::class);
        $this->call(ArticleTopicSeeder::class);
        $this->call(ArticleRegionSeeder::class);
        $this->call(PlaylistSeeder::class);
        $this->call(VideoPlaylistSeeder::class);
    }
}