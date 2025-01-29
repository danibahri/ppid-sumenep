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
        Schema::create('infografi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('klasifikasi_informasi_id')->constrained('klasifikasi_informasi')->onDelete('cascade');
            $table->foreignId('jenis_informasi_id')->constrained('jenis_informasi')->onDelete('cascade');
            $table->foreignId('detail_jenis_informasi_id')->constrained('detail_jenis_informasi')->onDelete('cascade');
            $table->string('nama_infografis');
            $table->string('post_by');
            $table->string('icon');
            $table->boolean('is_active')->default(true);
            $table->string('nama_dokumen');
            $table->string('path_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infografi');
    }
};
