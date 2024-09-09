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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 35);
            $table->decimal('precio', 10, 2)->default(0);
            $table->enum('tipo', ['Venta', 'Anticretico', 'Alquiler']);
            $table->string('ubicacion', 250)->nullable();
            $table->string('superficie', 75)->nullable();
            $table->text('descripcion')->nullable();

            //con las siguientes lineas de codigo creamos el enlace (RELACIONES) de tabla
            $table->unsignedBigInteger('propietario_id');//este campo me permite crear llaver foraneas
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');

            $table->unsignedBigInteger('vendedor_id');
            $table->foreign('vendedor_id')->references('id')->on('vendedores')->onDelete('set null');//este campo no es obligatorio

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
