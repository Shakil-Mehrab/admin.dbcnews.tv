<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->string('slug')->unique()->index();
            $table->string('title')->index();
            $table->string('kicker')->nullable();
            $table->text('teaser')->nullable();
            $table->longText('content')->nullable();
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
        Schema::dropIfExists('articles');
    }
}