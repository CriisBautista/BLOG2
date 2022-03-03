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
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->text('TITULO');
            $table->text('DESCRIPCION');
            $table->text('ARTICULO1');
            $table->text('ARTICULO2');
            $table->text('ARTICULO3');
            $table->text('ARTICULO4');
            $table->text('ARTICULO5');
            $table->text('ARTICULO6');
            $table->string('IMAGEN');
            $table->string('UNIDAD');
            $table->string('slug');

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
        Schema::dropIfExists('publicaciones');
    }
};
