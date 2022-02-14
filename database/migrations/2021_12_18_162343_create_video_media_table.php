<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_media', function (Blueprint $table) {
            $table->foreignId('video_id')->index()->constrained('videos');
            $table->foreignId('media_id')->index()->constrained('media');
            $table->timestamps();

            $table->primary(['video_id', 'media_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_media');
    }
}
