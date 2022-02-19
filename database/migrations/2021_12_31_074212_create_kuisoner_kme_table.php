<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisonerKmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisoner_kme', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('kme1');
            $table->string('kme2');
            $table->string('kme3');
            $table->string('kme4');
            $table->string('kme5');
            $table->string('kme6');
            $table->string('kme7');
            $table->string('kme8');
            $table->string('kme9');
            $table->string('kme10');
            $table->string('kme11');
            $table->string('kme12');
            $table->string('kme13');
            $table->string('kme14');
            $table->string('kme15');
            $table->string('kme16');
            $table->string('kme17');
            $table->string('kme18');
            $table->string('kme19');
            $table->string('kme20');
            $table->string('kme21');
            $table->string('kme22');
            $table->string('kme23');
            $table->string('kme24');
            $table->string('kme25');
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
        Schema::dropIfExists('kuisoner_kme');
    }
}
