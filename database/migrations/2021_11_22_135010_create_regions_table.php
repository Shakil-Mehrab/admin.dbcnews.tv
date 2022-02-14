<?php

// use Kalnoy\Nestedset\NestedSet;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('user_id')->index()->nullable()->constrained('users');
            // NestedSet::columns($table);
            $table->string('parent_id')->index()->nullable();
            $table->string('name')->index();
            $table->string('bd_name')->index()->nullable();
            $table->string('slug')->index()->nullable();
            $table->bigInteger('order')->nullable();
            // $table->float('lat')->nullable();
            // $table->float('lng')->nullable();
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
        Schema::dropIfExists('regions');
    }
}