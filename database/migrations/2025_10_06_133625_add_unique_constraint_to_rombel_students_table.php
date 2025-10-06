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
        Schema::table('rombel_students', function (Blueprint $table) {
             // Seorang siswa hanya boleh terdaftar di satu rombel dalam satu periode
            $table->unique(['siswa_id', 'period_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rombel_students', function (Blueprint $table) {
            $table->dropUnique(['siswa_id', 'period_id']);
        });
    }
};
