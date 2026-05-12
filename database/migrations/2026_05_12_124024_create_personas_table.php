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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->integer('telefono')->unsigned();
            $table->string('mail', 50);
            $table->string('contraseña', 200);
            $table->foreignId('perfiles_id')
                ->constrained('perfiles')
                ->onDelete('cascade')->default(2);
            $table->boolean('estado')->default(true);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
