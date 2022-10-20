<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('inventaris_id');
            $table->string('nama_peminjam');
            $table->text('keterangan');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('scan_ktm');
            $table->timestamp('tgl_pinjam')->nullable();
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
        Schema::dropIfExists('peminjamen');
    }
}
