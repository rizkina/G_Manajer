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
        // 1. Tambahkan kolom username untuk NIP/NISN (sesuai rekomendasi #3)
            // Dibuat unique dan nullable (untuk Super-Admin yang tidak punya NIP/NISN)
            $table->string('username')->unique()->nullable()->after('name');

            // 2. Tambahkan kolom group_id untuk menghubungkan User ke Group (sesuai rekomendasi #1)
            // Dibuat nullable untuk Super-Admin dan agar bisa dibuat dulu sebelum ditentukan grupnya.
            // `after('id')` menempatkan kolom ini setelah kolom `id` agar mudah dilihat.
            $table->foreignId('group_id')->nullable()->after('id')->constrained('groups');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Penting: Hapus constraint dulu sebelum menghapus kolomnya
            $table->dropForeign(['group_id']);
            $table->dropColumn(['group_id', 'username']);
        });
    }
};
