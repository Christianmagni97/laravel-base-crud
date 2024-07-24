<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('specie');
            $table->integer('longevità',);
            $table->string('alimentazione');
            $table->string('habitat');
            $table->string('regione');
            $table->boolean('rischio_estinzione');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};