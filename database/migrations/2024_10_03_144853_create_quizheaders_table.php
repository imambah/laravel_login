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
        Schema::create('quizheaders', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('jenis');
            $table->text('narasi');
            $table->text('petunjuk');
            $table->string('field01');
            $table->string('field02');
            $table->string('field03');
            $table->string('field04');
            $table->string('field05');
            $table->string('status');
            $table->string('responden');  //mahasiswa,dosen,pegawai,perusahaan,wisudawan
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_headers');
    }
};
