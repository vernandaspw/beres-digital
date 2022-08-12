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
        Schema::create('layanan_varian_item_duas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_varian_dua_id')->constrained('layanan_varian_duas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',100);
            $table->decimal('harga',19,2)->default(0);
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
        Schema::dropIfExists('layanan_varian_item_duas');
    }
};
