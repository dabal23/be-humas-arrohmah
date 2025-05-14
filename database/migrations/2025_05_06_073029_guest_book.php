<?php

use GuzzleHttp\Promise\Create;
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
        Schema::create('guest_book', function (Blueprint $table) {
            $table->id();
            $table->string('provinsi', 255);
            $table->string('kota/kabupaten', 255);
            $table->string('alamat', 255)->nullable();
            $table->string('name');
            $table->string('phone_number',20);
            $table->string('keperluan',255);
            $table->text('note')->nullable();
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
