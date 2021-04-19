<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCauhoidiemdanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_cauhoidiemdanh', function (Blueprint $table) {
            $table->id();
            $table->String('cauhoi');
            $table->String('ansa');
            $table->String('ansb');
            $table->String('ansc');
            $table->String('ansd');
            $table->String('caucx');
            $table->String('buoi');
            $table->String('mahocphan');
            $table->String('monhoc');
            $table->String('giaovien');
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
        Schema::dropIfExists('table_cauhoidiemdanh');
    }
}
