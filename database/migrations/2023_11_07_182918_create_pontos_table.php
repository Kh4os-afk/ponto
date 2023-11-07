<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pontos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no')->nullable();
            $table->unsignedInteger('mchn')->nullable();
            $table->integer('en_no')->nullable();
            $table->string('name')->nullable(); // Considerando que podem haver nomes vazios no arquivo txt
            $table->unsignedTinyInteger('mode')->nullable();
            $table->unsignedTinyInteger('io_md')->nullable();
            $table->dateTime('date_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos');
    }
};
