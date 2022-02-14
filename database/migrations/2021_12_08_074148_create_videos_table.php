<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->string('slug')->unique()->index();
            $table->string('title')->index();
            $table->string('presenter')->nullable();
            $table->string('onaired_at')->nullable();
            $table->string('url');
            $table->text('iframe');
            $table->string('link')->nullable();
            $table->text('content')->nullable();
            $table->bigInteger('publisher_id')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('pinned')->default(false);
            $table->boolean('highlighted')->default(false);
            $table->boolean('is_active')->default(false);
            $table->string('status')->nullable();
            $table->foreignId('media_id')->nullable()->constrained('media');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}