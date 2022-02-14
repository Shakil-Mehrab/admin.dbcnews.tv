<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('user_id')->index()->nullable()->constrained('users');
            $table->string('name')->index();
            $table->string('bd_name')->nullable();
            $table->string('slug')->unique()->index();
            $table->string('presenter')->nullable()->index();
            $table->text('icon')->nullable();
            $table->bigInteger('order')->nullable();
            $table->boolean('is_active')->default(false);
            $table->string('onaired_at')->nullable();
            $table->string('status')->nullable()->default('live');
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
        Schema::dropIfExists('playlists');
    }
}