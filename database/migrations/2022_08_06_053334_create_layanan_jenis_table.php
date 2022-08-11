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
        Schema::create('layanan_jenis', function (Blueprint $table) {
            $table->id();
            $table->string('slug',100);
            $table->string('nama',80)->unique();
            $table->string('gambar',70)->nullable();
            $table->string('singkat')->nullable();
            $table->longText('keterangan')->nullable();
            $table->integer('urut')->unsigned()->nullable();
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
        Schema::dropIfExists('layanan_jenis');
    }
};
