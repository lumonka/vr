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
        Schema::create('label', function (Blueprint $table) {
            $table->id();
            $table->integer('id_banner')->unsigned();
            $table->foreign('id_banner')->references('id')->on('label_banner');
            $table->integer('id_header')->unsigned();
            $table->foreign('id_header')->references('id')->on('label_header');
            $table->integer('id_cards')->unsigned();
            $table->foreign('id_cards')->references('id')->on('label_cards');
            
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
