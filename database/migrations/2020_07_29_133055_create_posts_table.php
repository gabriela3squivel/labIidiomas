<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tema')->nullable();
            $table->string('categoria')->nullable(); //Grammar, Listening, Reading, Speaking...
            $table->integer('tipo')->nullable(); //1:enlace, 2:archivo, 3:video/enlace
            $table->string('descripcion',400)->nullable();
            $table->string('nombreArchivo',500)->nullable();
            $table->unsignedBigInteger('profesor')->nullable();
            $table->timestamps();
            $table->foreign('profesor')->references('id')->on('profesors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
