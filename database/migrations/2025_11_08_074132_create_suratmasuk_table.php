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
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->string('judul_surat');
            $table->string('instansi_pengirim');
            $table->enum('kategori',['dispen','surat dinas','surat orang tua','surat rekomendasi','surat instansi'])->default('dispen');
            $table->string('alasan');
            $table->string('penerima_surat');
            $table->date('tanggal_mengirim');
            $table->string('nama_pengirim');
            $table->string('no_telepon');
            $table->enum('status', ['pending', 'diterima', 'ditolak'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuk');
    }
};
