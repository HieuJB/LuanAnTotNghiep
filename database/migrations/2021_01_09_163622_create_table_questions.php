<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_questions', function (Blueprint $table) {
            $table->id();
            $table->String('question');
            $table->String('ansa');
            $table->String('ansb');
            $table->String('ansc');
            $table->String('ansd');
            $table->String('ansCX');
            $table->String('ansPL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_questions');
    }
}
