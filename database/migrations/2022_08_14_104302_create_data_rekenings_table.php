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
        Schema::create('data_rekenings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('metode_pembayaran_id')->constrained('metode_pembayarans')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_bank')->nullable();
            $table->string('atas_nama')->nullable();
            $table->string('nomor_rek')->nullable();
            $table->boolean('istersedia')->default(true);
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
        Schema::dropIfExists('data_rekenings');
    }
};
