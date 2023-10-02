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
        Schema::create('parabrisas', function (Blueprint $table) {
            $table->id();
            
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('marca');
            $table->string('color');//actua como un nombre
            $table->string('detalle')->nullable();
            $table->decimal('precio',8,2);        
            $table->unsignedBigInteger('categoria_id');
           // $table->unsignedBigInteger('vehiculo_id');

           
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            //$table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parabrisas');
    }
};
