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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('amantha')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->date('peminjaman_pinjam')->nullable();
            $table->date('peminjaman_vent')->nullable();
            $table->boolean('peminjaman_status')->default(false);
            $table->text('pemajaman_note')->nullable();
            $table->integer('peminjaman_denda')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
