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
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_user');
            $table->text('alamat');
            $table->string('nama_penerima');
            $table->string('metode_pembayaran');
            $table->timestamp('tanggal_transaksi');
            $table->text('note');
            $table->string('status')->default('packing');
            $table->foreign('id_user')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_produk')->references('id')->on('produks')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
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
