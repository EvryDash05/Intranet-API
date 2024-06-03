<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsuarioRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TB_usuario_roles', function (Blueprint $table) {
            $table->string('id_rol');
            $table->string('ID_Usuario');
            $table->timestamps();

            $table->foreign('id_rol')->references('id_rol')->on('TB_rol')->onDelete('cascade');
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
        Schema::dropIfExists('TB_usuarios_roles');
    }
}
