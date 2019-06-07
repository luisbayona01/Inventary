<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('productos', function (Blueprint $table) {
            $table->increments('idproductos');
            $table->string('name');
            $table->integer('stock');
            $table->string('fechavencimiento');
            $table->integer('nlote');
            $table->integer('valor');
                 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
