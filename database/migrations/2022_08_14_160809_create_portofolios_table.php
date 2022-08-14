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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('nama',150)->unique();
            $table->string('slug',180);
            $table->foreignId('layanan_jenis_id')->nullable()->constrained('layanan_jenis')->onUpdate('cascade')->onDelete('set null');
            $table->foreignId('layanan_id')->nullable()->constrained('layanans')->onUpdate('cascade')->onDelete('set null');
            $table->longText('tentang')->nullable();
            $table->longText('alat')->nullable();
            $table->longText('proses')->nullable();
            $table->longText('tantangan')->nullable();
            $table->longText('hasil')->nullable();
            $table->boolean('istampil')->default(true);
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
        Schema::dropIfExists('portofolios');
    }
};
