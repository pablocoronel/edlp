<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarForeingKeyATablaHistorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historias', function (Blueprint $table) {
            // Anterior
            // $table->integer('id_usuario_creador')->unsigned()->change();

            $table->foreign('id_usuario_creador')
                    ->references('id')->on('usuarios')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historias', function (Blueprint $table) {
            $table->dropForeign('historias_id_usuario_creador_foreign');
        });
    }
}
