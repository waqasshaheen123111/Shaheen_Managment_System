<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibraryAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('library_albums', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('type_id');
    $table->string('title');
    $table->unsignedBigInteger('parent_id')->nullable();
    $table->timestamps();
    
    // Add foreign key constraint for type_id
    $table->foreign('type_id')
          ->references('id')
          ->on('library_types')
          ->onDelete('cascade');

    // Add foreign key constraint for parent_id
    $table->foreign('parent_id')
          ->references('id')
          ->on('library_albums')
          ->onDelete('cascade');

    // Add unique constraint for title within each type
    $table->unique(['type_id', 'title']);

    // Add index on type_id and parent_id for faster queries
    $table->index(['type_id', 'parent_id']);
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_albums');
    }
}
