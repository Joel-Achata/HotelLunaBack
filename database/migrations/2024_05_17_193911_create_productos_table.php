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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen')->default('default.png');
            $table->float('precio');
            $table->text('descripcion');
            $table->foreignId('categoria_id')->constrained('categorias')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('stock');
            $table->foreignId('proveedor_id')->constrained('proveedores')->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
