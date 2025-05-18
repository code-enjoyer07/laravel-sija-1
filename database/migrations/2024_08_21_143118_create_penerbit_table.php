<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penerbit', function (Blueprint $table) {
            $table->id();
            $table->string('penerbit_nama');
            $table->text('penerbit_alamat');
            $table->char('penerbit_notelp');
            $table->string('penerbit_email');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerbit');
    }
};
