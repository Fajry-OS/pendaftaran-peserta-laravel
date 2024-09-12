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
        Schema::table('users', function (Blueprint $table) {
            // Hapus constraint foreign key yang ada
            $table->dropForeign(['id_level']);

            // Tambahkan constraint foreign key baru dengan onDelete dan onUpdate cascade
            $table->foreign('id_level')
                ->references('id')
                ->on('levels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus constraint foreign key yang baru
            $table->dropForeign(['id_level']);

            // Tambahkan constraint foreign key dengan restrict
            $table->foreign('id_level')
                ->references('id')
                ->on('levels')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }
};
