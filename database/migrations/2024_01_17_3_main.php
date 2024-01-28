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
        Schema::create('main', function (Blueprint $table) {
            $table->id();
            $table->integer('id_banner')->unsigned();
            $table->foreign('id_banner')->references('id')->on('main_banner');
            $table->integer('id_music')->unsigned();
            $table->foreign('id_music')->references('id')->on('main_music');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
