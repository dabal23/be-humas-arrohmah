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
        Schema::create('paket_humas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket')->unique();
            $table->timestamp('waktu_paket_datang')->useCurrent();
            // $table->foreignId('user_id')->constrained('users');
            $table->string('ciri_paket');
            $table->string('catatan')->nullable();
            $table->string('nama_pengambil')->unique()->nullable();
            $table->timestamp('waktu_paket_diambil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
