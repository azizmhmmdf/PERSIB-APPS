<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisonerGbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisoner_gb', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('gb1');
            $table->string('gb2');
            $table->string('gb3');
            $table->string('gb4');
            $table->string('gb5');
            $table->string('gb6');
            $table->string('gb7');
            $table->string('gb8');
            $table->string('gb9');
            $table->string('gb10');
            $table->string('gb11');
            $table->string('gb12');
            $table->string('gb13');
            $table->string('gb14');
            $table->string('gb15');
            $table->string('gb16');
            $table->string('gb17');
            $table->string('gb18');
            $table->string('gb19');
            $table->string('gb20');
            $table->string('gb21');
            $table->string('gb22');
            $table->string('gb23');
            $table->string('gb24');
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
        Schema::dropIfExists('kuisoner_gb');
    }
}
