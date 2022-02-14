<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoPlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_playlist', function (Blueprint $table) {
            $table->foreignId('video_id')->index()->constrained('videos');
            $table->foreignId('playlist_id')->index()->constrained('playlists');
            $table->timestamps();

            $table->primary(['video_id', 'playlist_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_playlist');
    }
}