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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre y apellido', 100);
            $table->string('mail', 50);
            $table->integer('telefono')->unsigned();
            $table->string('motivo', 50);
            $table->string('plataforma', 50);
            $table->string('mensaje', 200);
            $table->boolean('contestado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
