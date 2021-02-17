<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id')->nullable();
            $table->string('title');
            $table->string('url');
            $table->string('band');
            $table->timestamps();
        });

        Schema::table('musics', function (Blueprint $table) {
          
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('set null');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}
