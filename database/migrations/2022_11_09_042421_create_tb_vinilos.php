<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_vinilos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interprete');
            $table->string('album');
            $table->string('disquera');
            $table->string('lanzamiento');
            $table->string('Ncanciones');
            $table->string('PCompra');
            $table->string('PVenta');
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
        Schema::dropIfExists('tb_vinilos');
    }
};
