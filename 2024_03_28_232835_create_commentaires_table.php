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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_utilisateur');
            $table->foreign('ID_utilisateur')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->unsignedBigInteger('ID_note');
            $table->foreign('ID_note')->references('id')->on('notes')->onDelete('cascade');
            $table->text('Contenu');
            $table->timestamp('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
};
