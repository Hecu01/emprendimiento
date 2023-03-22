<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgGorrasBetsob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_gorras_betsob', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre');
        $table->string('formato');
        $table->integer('id_gorra')->references('id')->on('betsob_gorras')->onDelete('cascade');
        $table->timestamps();
        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('img_gorras_betsob');
    }
}
