<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proofs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subpoin_id');
            $table->foreignId('user_id');
            $table->string('desc');
            $table->string('proof');
            $table->string('message')->nullable()->default('Belum ada pesan dari verifikator, Silahkan isi poin SKU yang lain. Terima Kasih');
            $table->string('verification')->nullable()->default('Belum Terverifikasi');
            $table->string('date');
            $table->timestamps();

            $table->foreign('subpoin_id')
                ->references('id')
                ->on('subpoins')
                ->onUpdate('restrict')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proofs');
    }
}
