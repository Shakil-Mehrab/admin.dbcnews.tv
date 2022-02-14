<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_region', function (Blueprint $table) {
            $table->foreignId('article_id')->index()->constrained('articles');
            $table->foreignId('region_id')->index()->constrained('regions');
            $table->timestamps();

            $table->primary(['article_id', 'region_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_region');
    }
}