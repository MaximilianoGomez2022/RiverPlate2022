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
        Schema::create('productos_tienen_talles', function (Blueprint $table) {
            $table->foreignId('producto_id')->constrained('productos', 'producto_id');
            $table->unsignedSmallInteger('talle_id');
            $table->foreign('talle_id')->references('talle_id')->on('talles');
            $table->primary(['producto_id', 'talle_id']);
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
        Schema::dropIfExists('productos_tienen_talles');
    }
};
