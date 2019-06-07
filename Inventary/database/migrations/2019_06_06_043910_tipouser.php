<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipouser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {     Schema::create('tIpouser', function (Blueprint $table) {
            $table->increments('IdtIpouser');
            $table->string('descripcion');
            
                   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tIpouser');
    }
}
