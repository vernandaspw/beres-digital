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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nohp')->nullable()->unsigned();
            $table->enum('sex',['m','f'])->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('email')->unique();
            $table->string('google_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->enum('role', ['customer', 'superadmin', 'admin', 'finance', 'operator']);
            $table->boolean('isaktif')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
