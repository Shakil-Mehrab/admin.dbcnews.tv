<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_topic', function (Blueprint $table) {
            $table->foreignId('article_id')->index()->constrained('articles');
            $table->foreignId('topic_id')->index()->constrained('topics');
            $table->timestamps();

            $table->primary(['article_id', 'topic_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_topic');
    }
}