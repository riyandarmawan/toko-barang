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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id_transaksi', 20);
            $table->string('id_pelanggan', 10);
            $table->date('tanggal_transaksi');
            $table->bigInteger('total_harga');
            $table->timestamps();
            $table->softDeletes();

            $table->primary('id_transaksi');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
