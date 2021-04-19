<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableApi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_api', function (Blueprint $table) {
            $table->id();
            $table->String('question');
            $table->String('ansa');
            $table->String('ansb');
            $table->String('ansc');
            $table->String('ansd');
            $table->String('ansCX');
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
        Schema::dropIfExists('table_api');
    }
}
