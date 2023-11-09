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
        Schema::create('outdoors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->string('brand');
            $table->integer('stok');
            $table->string('status');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outdoors');
    }
};
