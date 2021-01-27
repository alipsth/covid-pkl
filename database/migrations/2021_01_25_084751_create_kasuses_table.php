<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('negaras_id');
            $table->integer('kode_negara');
            $table->string('jumlah_positif');
            $table->integer('jumlah_sembuh');
            $table->integer('jumlah_meninggal');
            $table->date('tgl_update');
            $table->foreign('negaras_id')
            ->references('id')->on('negaras')->onDelete('cascade');
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
        Schema::dropIfExists('kasuses');
    }
}
