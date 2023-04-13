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
        Schema::create('transaksi_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('transaksis')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status',['pending', 'approve', 'pay awal', 'pay awal konfirm', 'pay awal true', 'pengerjaan', 'selesai dikerjakan', 'review', 'revisi', 'pay akhir', 'pay akhir konfirm', 'pay akhir true', 'penyerahan', 'selesai', 'batal', 'tolak'])->default('pending');
            $table->longText('keterangan')->nullable();
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
        Schema::dropIfExists('transaksi_logs');
    }
};
