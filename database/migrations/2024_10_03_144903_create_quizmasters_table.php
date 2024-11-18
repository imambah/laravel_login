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
        Schema::create('quizmasters', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->string('sequence');
            $table->string('kompetensi');
            $table->string('pernyataan');
            $table->string('variable');
            $table->string('status');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_masters');
    }
};