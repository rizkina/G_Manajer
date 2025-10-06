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
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade');
            $table->enum('status', ['ayah', 'ibu']);
            $table->string('nama')->nullable();
            $table->string('nik', 16)->nullable(); // Hapus unique(), buat nullable untuk fleksibilitas jika NIK belum ada

            // Asumsi tabel referensi sudah dibuat
            // DIUBAH: Semua foreign key referensi dibuat nullable.
            $table->foreignId('ref_pekerjaan_id')->nullable()->constrained('ref_pekerjaans');
            $table->foreignId('ref_penghasilan_id')->nullable()->constrained('ref_penghasilans');
            $table->foreignId('ref_pendidikan_id')->nullable()->constrained('ref_pendidikans');
            $table->timestamps();

            // Aturan baru: Kombinasi siswa dan status harus unik.
            // Mencegah seorang siswa punya 2 data ayah atau 2 data ibu.
            $table->unique(['siswa_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang_tuas');
    }
};
