<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderBarang', function (Blueprint $table) {
            $table->Increments('id_Order');
            $table->integer('id_produk')->unsigned();
            $table->integer('id_customer')->unsigned();
            $table->String('nama_customer');
            $table->String('nama_produk');
            $table->String('harga_produk');
            $table->String('jumlah_beli');
            $table->String('total_harga');
            $table->String('bayar');
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_customer')->references('id_customer')->on('customer')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('OrderBarang');
    }
}
