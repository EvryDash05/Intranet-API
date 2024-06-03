<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_Pedidos', function (Blueprint $table) {
            $table->string('ID_Pedido')->primary();
            $table->string('ID_Usuario');
            $table->date('Fecha_Pedido');
            $table->string('Estado');
            $table->timestamps();

            $table->foreign('ID_Usuario')->references('ID_Usuario')->on('TB_Usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TB_Pedidos');
    }
}
