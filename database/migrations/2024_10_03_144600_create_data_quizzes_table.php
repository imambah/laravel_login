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
        Schema::create('data_quizzes', function (Blueprint $table) {
            $table->id();
//          $table->date('tanggal');
            $table->integer('tahun_ajaran');
            $table->string('semester');
            $table->string('grup_quiz');
            $table->text('keterangan_quiz');
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('field4');
            $table->string('field5');
            $table->integer('q01');
            $table->integer('q02');
            $table->integer('q03');
            $table->integer('q04');
            $table->integer('q05');
            $table->integer('q06');
            $table->integer('q07');
            $table->integer('q08');
            $table->integer('q09');
            $table->integer('q10');
            $table->integer('q11');
            $table->integer('q12');
            $table->integer('q13');
            $table->integer('q14');
            $table->integer('q15');
            $table->integer('q16');
            $table->integer('q17');
            $table->integer('q18');
            $table->integer('q19');
            $table->integer('q20');
            $table->integer('q21');
            $table->integer('q22');
            $table->integer('q23');
            $table->integer('q24');
            $table->integer('q25');
            $table->text('suggest');
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
        Schema::dropIfExists('data_quizzes');
    }
};
