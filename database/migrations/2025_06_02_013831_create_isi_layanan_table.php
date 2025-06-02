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
        Schema::create('isi_layanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_id');
            $table->string('judul');
            $table->text('deskripsi_layanan');
            $table->json('gambar_layanan');
            $table->integer('urutan')->default(0);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('layanan_id')->references('id')->on('beranda_layanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isi_layanan');
    }
};
