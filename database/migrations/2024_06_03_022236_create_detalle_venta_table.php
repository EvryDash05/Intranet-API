<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_Detalle_Venta', function (Blueprint $table) {
            $table->string('ID_Detalle_Venta')->primary();
            $table->string('ID_Venta');
            $table->string('ID_Producto');
            $table->integer('Cantidad');
            $table->decimal('Precio_Unitario', 8, 2);
            $table->decimal('Subtotal', 8, 2);
            $table->timestamps();

            $table->foreign('ID_Venta')->references('ID_Venta')->on('TB_Ventas')->onDelete('cascade');
            $table->foreign('ID_Producto')->references('ID_Producto')->on('TB_Productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
