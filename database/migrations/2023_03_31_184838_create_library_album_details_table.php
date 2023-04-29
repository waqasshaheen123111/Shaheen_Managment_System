<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryAlbumDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_album_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('library_album_id');
            $table->string('filename');

            // Foreign Key

            $table->foreign('library_album_id')
            ->references('id')
            ->on('library_albums')
            ->onDelete('cascade');


        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_album_details');
    }
}
