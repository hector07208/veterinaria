<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('mascotas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('especie');
        $table->string('raza');
        $table->integer('edad');
        $table->foreignId('dueno_id')->constrained('duenos');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
