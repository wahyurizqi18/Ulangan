<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang',50);
            $table->integer('harga');
            $table->string('nama_perusahaan',50);
            $table->integer('netto');
            $table->integer('stok');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamp('waktu_penambahan')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
