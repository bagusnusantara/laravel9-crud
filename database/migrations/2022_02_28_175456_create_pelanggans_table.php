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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->string('kode_pelanggan')->uniqid();
            $table->string('nama_pelanggan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('jenis_pelanggan')->nullable();
            $table->integer('plafon')->nullable();
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
        Schema::dropIfExists('pelanggans');
    }
};
