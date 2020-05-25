<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('asunto');
            $table->string('mensaje');
            $table->binary('adjunto')->nullable();
            $table->smallinteger('prioridad');
=======
            $table->string('asunto')->nullable();
            $table->string('mensaje')->nullable();
            $table->binary('adjunto')->nullable();
            $table->string('prioridad');
>>>>>>> 55d54350fdf2f6662994a14d720f66f5fa0e477f
            $table->boolean('leido');
            $table->string('co');
            $table->string('cd');
            $table->timestamp('enviado',0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
