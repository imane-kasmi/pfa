<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mot_cle_note', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_note');
            $table->foreign('ID_note')->references('id')->on('notes')->onDelete('cascade');
            $table->unsignedBigInteger('ID_mot_cle');
            $table->foreign('ID_mot_cle')->references('id')->on('mot_cle')->onDelete('cascade');
            $table->primary(['ID_note', 'ID_mot_cle']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mot_cle_note');
    }
};
