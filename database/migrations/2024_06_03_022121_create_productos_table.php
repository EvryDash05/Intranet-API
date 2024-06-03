<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_Productos', function (Blueprint $table) {
            $table->string('ID_Producto')->primary();
            $table->string('Categoria');
            $table->string('Etiqueta')->nullable();
            $table->text('Descripcion');
            $table->string('Medidas');
            $table->string('Material');
            $table->string('Nombre');
            $table->string('Extras')->nullable();
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
        Schema::dropIfExists('TB_Productos');
    }
}
