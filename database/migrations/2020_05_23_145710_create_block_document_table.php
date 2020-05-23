<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlockDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_document', function (Blueprint $table) {
            $table->unsignedBigInteger('block_id');
            $table->unsignedBigInteger('document_id');

            $table->primary(['block_id', 'document_id']);
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->foreign('document_id')->references('id')->on('documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_document');
    }
}
