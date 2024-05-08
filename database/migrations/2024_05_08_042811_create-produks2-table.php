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
        Schema::create('produk2s', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_produk');
            $table->integer('jumlah');
            $table->unsignedBigInteger('merk_id');
            $table->timestamps();
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks2');
    }
};
