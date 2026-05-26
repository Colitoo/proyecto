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
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->string('url_imagen')->nullable();
            $table->foreignId('categoria_id') 
                  ->constrained('categorias')   
                  ->onDelete('cascade');
            // las tres líneas juntas dicen: "cada producto 
            //pertenece a una categoría que debe existir, y si esa categoría se borra, sus productos se borran también".
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
