<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('CODIGO_PT');
            $table->string('NOMBRE_PRODUCTO');
            $table->float('PRECIO');
            $table->integer('FACTOR_CONVERSION_EXISTENCIA');
            $table->float('PESO_UNIDAD_MAYOR');
            $table->float('VOLUMEN_UNIDAD_MAYOR');
            $table->float('PRECIO_UNITARIO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
