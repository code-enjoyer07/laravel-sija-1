<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penulis_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->unsignedBigInteger('kategori_id');
            $table->string('buku_judul');
            $table->char('buku_isbn');
            $table->char('buku_thnterbit');

            $table->foreign('penulis_id')->references('id')->on('penulis')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('penerbit_id')->references('id')->on('penerbit')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
