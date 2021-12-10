<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->id();
            
            $table->decimal('precio_unitario',10,2);
            $table->unsignedBigInteger('venta_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('venta_id')
            ->references('id')->on('ventas')
            ->onDelete('set null');
            $table->foreign('vehiculo_id')
            ->references('id')->on('vehiculos')
            ->onDelete('set null');
            
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
        Schema::dropIfExists('nota_ventas');
    }
}
