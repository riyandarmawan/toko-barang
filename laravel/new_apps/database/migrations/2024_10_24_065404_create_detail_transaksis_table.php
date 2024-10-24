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
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi', 20);
            $table->string('id_barang', 10);
            $table->tinyInteger('jumlah');
            $table->bigInteger('sub_total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
