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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->integer('id_banner')->unsigned();
            $table->foreign('id_banner')->references('id')->on('contact_banner');
            $table->integer('id_contacts')->unsigned();
            $table->foreign('id_contacts')->references('id')->on('contact_contacts');
            
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
