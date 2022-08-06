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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title',150)->nullable();
            $table->longText('hero_body')->nullable();
            $table->string('tentang_title',100)->nullable();
            $table->longText('tentang_body')->nullable();
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
            $table->integer('pajak')->default(0);
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
        Schema::dropIfExists('settings');
    }
};
