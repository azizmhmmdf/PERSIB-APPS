<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_gb', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('rgb_audiotori');
            $table->integer('rgb_visual');
            $table->integer('rgb_kinestetik');
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
        Schema::dropIfExists('rekap_gb');
    }
}
