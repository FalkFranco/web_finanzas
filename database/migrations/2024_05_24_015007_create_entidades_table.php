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
        // Tablas de entidades y tipo de entidades
        Schema::create('tipo_entidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('tipo_entidad_id');
            $table->unsignedBigInteger('user_id'); // Relación con usuarios
            $table->timestamps();

            $table->foreign('tipo_entidad_id')->references('id')->on('tipo_entidades');
            $table->foreign('user_id')->references('id')->on('users'); // Clave foránea para usuarios
        });

        // Tablas de tarjetas y tipo de tarjetas
        Schema::create('tipo_tarjetas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('entidad_id');
            $table->string('numero_tarjeta', 4)->nullable(); // Últimos cuatro dígitos o algún identificador
            $table->date('fecha_vencimiento')->nullable();
            $table->unsignedBigInteger('tipo_tarjeta_id')->nullable();
            $table->decimal('limite_credito', 15, 2)->nullable(); // Límite de crédito
            $table->decimal('saldo_actual', 15, 2)->nullable(); // Saldo actual
            $table->string('nombre_titular')->nullable(); // Nombre del titular de la tarjeta
            $table->date('fecha_emision')->nullable();
            $table->string('estado')->nullable(); // Activa, bloqueada, etc.
            $table->timestamps();

            $table->foreign('entidad_id')->references('id')->on('entidades');
            $table->foreign('tipo_tarjeta_id')->references('id')->on('tipo_tarjetas');
        });

        // Tablas de resúmenes y gastos
        Schema::create('resumenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tarjeta_id');
            $table->date('fecha_inicio'); // Fecha de inicio del período
            $table->date('fecha_fin'); // Fecha de fin del período
            $table->date('fecha_vencimiento'); // Fecha límite de pago
            $table->decimal('monto_total', 15, 2); // Monto total del resumen
            $table->decimal('monto_minimo', 15, 2); // Monto mínimo a pagar
            $table->string('estado')->nullable(); // Estado del resumen (pagado, pendiente, etc.)
            $table->date('fecha_pago')->nullable(); // Fecha de pago (si se ha pagado)
            $table->timestamps();
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
        });

        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resumen_id');
            $table->string('descripcion');
            $table->decimal('monto', 15, 2); // Monto del gasto
            $table->date('fecha_gasto'); // Fecha del gasto
            $table->string('categoria')->nullable(); // Categoría del gasto (opcional)
            $table->timestamps();
            $table->foreign('resumen_id')->references('id')->on('resumenes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
        Schema::dropIfExists('resumenes');
        Schema::dropIfExists('tarjetas');
        Schema::dropIfExists('entidades');
        Schema::dropIfExists('tipo_tarjetas');
        Schema::dropIfExists('tipo_entidades');
    }
};
