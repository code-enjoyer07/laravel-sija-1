<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peminjaman_detail_buku_id');
            $table->unsignedBigInteger('peminjaman_id');
            $table->timestamps();

            $table->foreign('peminjaman_detail_buku_id')->references('id')->on('buku')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('peminjaman_id')->references('id')->on('peminjaman')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman_detail');
    }
};

