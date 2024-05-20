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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->string('nro_reservacion', 4)->unique();
            $table->string('nro_promocion', 4)->unique();
            $table->string('cliente_dni', 8)->unique();
            $table->decimal('pago_adelantado', 15, 2); 
            $table->foreign('nro_promocion')->references('nro_promocion')->on('promociones')->onDelete('cascade');
            $table->foreign('cliente_dni')->references('dni')->on('clientes')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};


