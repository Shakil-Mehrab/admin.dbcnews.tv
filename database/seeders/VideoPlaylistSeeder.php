<?php

namespace Database\Seeders;

use App\Models\Video;
use App\Models\Playlist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class VideoPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::times(100, function ($number) {
            Video::inRandomOrder()->first()->playlists()->syncWithoutDetaching(Playlist::inRandomOrder()->first());
        });
    }
}
