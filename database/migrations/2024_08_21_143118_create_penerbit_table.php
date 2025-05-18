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
            $table->string('penerbit_nama', 50);
            $table->string('penerbit_alamat', 50);
            $table->char('penerbit_notelp', 13);
            $table->string('penerbit_email', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penerbit');
    }
};
