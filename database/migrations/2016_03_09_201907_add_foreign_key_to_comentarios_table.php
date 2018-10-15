<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreign('id_usuario')
                    ->references('id')->on('usuarios')
                    ->onUpdate('cascade')->onDelete('cascade');
        
            $table->foreign('id_historia')
                    ->references('id')->on('historias')
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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('comentarios_id_usuario_foreign');
            $table->dropForeign('comentarios_id_historia_foreign');
        });
    }
}
