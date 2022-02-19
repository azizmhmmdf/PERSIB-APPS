<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisonerDoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisoner_do', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('do1');
            $table->string('do2');
            $table->string('do3');
            $table->string('do4');
            $table->string('do5');
            $table->string('do6');
            $table->string('do7');
            $table->string('do8');
            $table->string('do9');
            $table->string('do10');
            $table->string('do11');
            $table->string('do12');
            $table->string('do13');
            $table->string('do14');
            $table->string('do15');
            $table->string('do16');
            $table->string('do17');
            $table->string('do18');
            $table->string('do19');
            $table->string('do20');
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
        Schema::dropIfExists('kuisoner_do');
    }
}
