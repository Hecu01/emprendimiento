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
        Schema::create('betsob_gorras', function (Blueprint $table) {
            $table->id();
            $table->integer('talle');
            $table->integer('precio');
            $table->boolean('reversible');
            $table->text('gorra');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('betsob_gorras');
    }
};