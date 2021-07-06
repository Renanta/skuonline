<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubpoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpoins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poin_id');
            $table->string('subPoin');
            $table->string('slug');
            $table->string('desc');
            $table->timestamps();

            $table->foreign('poin_id')
                ->references('id')
                ->on('poins')
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
        Schema::dropIfExists('subpoins');
    }
}
