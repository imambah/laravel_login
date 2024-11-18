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
        Schema::create('parameterdetails', function (Blueprint $table) {
            $table->id();
            $table->string('para_id');
            $table->string('table_code');
            $table->string('short_desc');
            $table->string('long_desc');
            $table->string('field01');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameterdetails');
    }
};
