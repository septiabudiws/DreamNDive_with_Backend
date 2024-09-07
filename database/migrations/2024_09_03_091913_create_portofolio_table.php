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
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->string('nama_portofolio');
            $table->string('client');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('foto');
            $table->text('deskripsi');
            $table->text('quotes')->nullable();
            $table->text('author')->nullable();
            $table->text('link')->nullable();
            $table->text('linkDefault')->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio');
    }
};
