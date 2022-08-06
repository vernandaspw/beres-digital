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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi',18)->unique();
            $table->foreignId('layanan_jenis_id')->nullable()->constrained('layanan_jenis')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_id')->nullable()->constrained('layanans')->onUpdate('cascade')->onDelete('set null');
            $table->string('nama_project',100);
            $table->longText('keterangan')->nullable();
            $table->decimal('harga_layanan', 19,2)->default(0);
            $table->decimal('harga_tambahan', 19,2)->default(0);
            $table->decimal('subtotal_layanan', 19,2)->default(0);
            $table->decimal('kode_unik', 6,2)->default(0);
            $table->decimal('pajak',19,2)->default(0);
            $table->decimal('total_pembayaran')->default(0);
            $table->enum('status',['pending', 'approve', 'pay awal', 'pay awal true', 'mulai pengerjaan', 'selesai dikerjakan', 'review', 'revisi', 'pay akhir', 'pay akhir true', 'penyerahan', 'selesai', 'batal', 'tolak'])->default('pending');
            $table->enum('status_bayar',['belum bayar', 'dp', 'lunas'])->default('belum bayar');
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
        Schema::dropIfExists('transaksis');
    }
};
