<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('slug')->unique();
            $table->string('url');
            $table->string('title')->index();
            $table->string('type');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('metable_id');
            $table->morphs('metable_type');
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
        Schema::dropIfExists('metas');
    }
}