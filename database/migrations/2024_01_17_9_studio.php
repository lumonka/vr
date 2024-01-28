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
        Schema::create('studio', function (Blueprint $table) {
            $table->id();
            $table->integer('id_banner_1')->unsigned();
            $table->foreign('id_banner_1')->references('id')->on('studio_banner_1');
            $table->integer('id_cards')->unsigned();
            $table->foreign('id_cards')->references('id')->on('studio_cards');
            $table->integer('id_list')->unsigned();
            $table->foreign('id_list')->references('id')->on('studio_list');
            $table->integer('id_banner_2')->unsigned();
            $table->foreign('id_banner_2')->references('id')->on('studio_banner_2');
            $table->integer('id_person')->unsigned();
            $table->foreign('id_person')->references('id')->on('studio_person');
            
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
