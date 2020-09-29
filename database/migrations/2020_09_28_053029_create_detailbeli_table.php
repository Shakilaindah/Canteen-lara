<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailbelis', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_makanan');
            $table->string('nama_pembeli');
            $table->string('nama_menu');
            $table->string('harga');
            $table->string('stok');
            $table->string('jumlah_beli');
            $table->string('total_harga');
            $table->string('pembayaran');
            $table->string('kembalian');
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
        Schema::dropIfExists('detailbeli');
    }
}
