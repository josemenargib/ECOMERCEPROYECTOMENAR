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
        Schema::create('productos_vendedor_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre',50);
            $table->string('imagen',250);
            $table->string('descripcion',50);
            $table->string('precio_venta',50);
            $table->string('stock',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_vendedor_models');
    }
};
