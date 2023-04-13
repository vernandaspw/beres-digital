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
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_transaksi', 18)->unique();
            $table->foreignId('layanan_jenis_id')->nullable()->constrained('layanan_jenis')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_id')->nullable()->constrained('layanans')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_items_id')->nullable()->constrained('layanan_varian_items')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_item_duas_id')->nullable()->constrained('layanan_varian_item_duas')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_item_tigas_id')->nullable()->constrained('layanan_varian_item_tigas')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_item_empats_id')->nullable()->constrained('layanan_varian_item_empats')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_varian_item_limas_id')->nullable()->constrained('layanan_varian_item_limas')->onUpdate('cascade')->onDelete('set null');
            $table->string('nama_project', 100);
            $table->longText('keterangan')->nullable();
            $table->decimal('harga_layanan', 19, 2)->default(0);
            $table->decimal('harga_tambahan', 19, 2)->default(0);
            $table->decimal('subtotal_layanan', 19, 2)->default(0);
            $table->decimal('kode_unik', 6, 2)->default(0);
            $table->decimal('fee', 19, 2)->default(0);
            $table->decimal('pendapatan', 19, 2)->default(0);
            $table->decimal('pajak', 19, 2)->default(0);
            $table->decimal('total_pembayaran', 19, 2)->default(0);
            $table->decimal('dp', 19, 2)->default(0);
            $table->foreignId('metode_pembayaran_id')->constrained('metode_pembayarans')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['pending', 'approve', 'pay awal', 'pay awal konfirm', 'pay awal true', 'pengerjaan', 'selesai dikerjakan', 'review', 'revisi', 'pay akhir', 'pay akhir konfirm', 'pay akhir true', 'penyerahan', 'selesai', 'batal', 'tolak'])->default('pending');
            $table->enum('status_bayar', ['belum bayar', 'dp', 'lunas'])->default('belum bayar');
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
