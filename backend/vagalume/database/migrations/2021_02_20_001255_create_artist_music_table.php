<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_music', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artist_id')->nullable();
            $table->foreignId('music_id')->nullable();
            $table->timestamps();
        });

        Schema::table('artist_music', function (Blueprint $table) {
          
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('set null');
            $table->foreign('music_id')->references('id')->on('musics')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_music');
    }
}
