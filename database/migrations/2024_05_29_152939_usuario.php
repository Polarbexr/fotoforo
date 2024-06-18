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
        Schema::create('usuarios', function (Blueprint $table){
            // $table->id();
            // $table->string('titulo', (50));
            // $table->string('descripcion', (200));
            // $table->string('fecha');
            // $table->string('usuario', (50));
            // $table->string('imagen', (200));
            $table->id();
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('password', 50);
            $table->date('create_at', 50);
            $table->date('updated_at', 50);
            $table->string('profile_picture', 50);
            $table->text('bio', 50);
            $table->string('location', 50);
            $table->string('phone_number', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
