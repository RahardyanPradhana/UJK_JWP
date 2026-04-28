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
         Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->string('nama')->nullable();
            $table->string('username')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('alamatkantor')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('lokasi2')->nullable();
            $table->string('kdlokasi')->nullable();
            $table->string('goldarah')->nullable();
            $table->string('kdcetak')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
