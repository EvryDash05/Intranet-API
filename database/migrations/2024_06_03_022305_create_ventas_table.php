<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_Ventas', function (Blueprint $table) {
            $table->string('ID_Venta')->primary();
            $table->string('ID_Pedido');
            $table->date('Fecha_Venta');
            $table->decimal('Total', 8, 2);
            $table->timestamps();

            $table->foreign('ID_Pedido')->references('ID_Pedido')->on('TB_Pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TB_Ventas');
    }
}
