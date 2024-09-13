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
        Schema::create('user_jurusan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jurusan')->nullable();
            $table->foreign('id_jurusan')
                ->references('id')
                ->on('jurusan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_level')->nullable();
            $table->foreign('id_level')
                ->references('id')
                ->on('levels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_jurusan');
    }
};
