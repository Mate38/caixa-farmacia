<?php

//Autores: Jean, Jeferson

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idusuarios');
            $table->string('login', 45)->nullable();
            $table->string('senha', 45)->nullable();
            $table->unsignedInteger('vendedores_idvendedores');
            $table->timestamps();

            $table->index(["vendedores_idvendedores"], 'fk_usuarios_vendedores1_idx');


            $table->foreign('vendedores_idvendedores', 'fk_usuarios_vendedores1_idx')
                ->references('idvendedores')->on('vendedores')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
