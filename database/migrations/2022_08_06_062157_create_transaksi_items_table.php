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
        Schema::create('transaksi_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('layanan_varian_id')->nullable()->constrained('layanan_varians')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_items_id')->nullable()->constrained('layanan_varian_items')->onUpdate('cascade')->onDelete('set null');
            $table->string('nama_varian',80);
            $table->string('nama_item',80);
            $table->decimal('harga', 19,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_items');
    }
};
