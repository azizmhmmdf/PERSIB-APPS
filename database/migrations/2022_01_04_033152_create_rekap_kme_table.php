<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_kme', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('rk_emosional');
            $table->integer('rk_perilaku');
            $table->integer('rk_hiperaktif');
            $table->integer('rk_temansebaya');
            $table->integer('rk_sosial');
            $table->integer('rk_total');
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
        Schema::dropIfExists('rekap_kme');
    }
}
