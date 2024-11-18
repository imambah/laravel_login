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
        Schema::create('mmenudetails', function (Blueprint $table) {
            $table->id();
            $table->integer('id_menu');
            $table->string('sub_menu');
            $table->string('description');
            $table->string('icon');
            $table->string('link');
            $table->integer('sort');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_menu_details');
    }
};
