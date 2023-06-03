<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('betsob_cofias', function (Blueprint $table) {
            $table->id();
            $table->integer('talle1');
            $table->integer('talle2')->nullable();
            $table->integer('precio');
            $table->boolean('reversible');
            $table->text('autor'); //nuevo
            $table->integer('cantidad')->nullable(); //nuevo
            $table->text('cofia');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('betsob_cofias');
    }
};
