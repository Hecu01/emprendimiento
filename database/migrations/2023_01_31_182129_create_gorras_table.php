<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGorrasTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up(){    
        Schema::create('betsob_gorras', function (Blueprint $table) {
            $table->bigIncrements('id_gorra');
            $table->string('nombre_gorra');
            $table->string('talle_gorra');
            $table->string('creador_gorra');
            $table->integer('imagen_gorra')->unsigned();
            $table->string('url_gorra');
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
        Schema::dropIfExists('betsob_gorras');
    }

}
