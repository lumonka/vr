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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('id_banner')->unsigned();
            $table->foreign('id_banner')->references('id')->on('services_banner');
            $table->integer('id_headers')->unsigned();
            $table->foreign('id_headers')->references('id')->on('services_headers');
            $table->integer('id_cards')->unsigned();
            $table->foreign('id_cards')->references('id')->on('services_cards');
            
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
