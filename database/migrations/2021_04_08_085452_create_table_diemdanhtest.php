<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDiemdanhtest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_diemdanhtest', function (Blueprint $table) {
            $table->id();
            $table->String('msv');
            $table->String('hoten');
            $table->String('lop');
            $table->String('buoi1');
            $table->String('diembuoi1');
            $table->String('buoi2');
            $table->String('diembuoi2');
            $table->String('buoi3');
            $table->String('diembuoi3');
            $table->String('buoi4');
            $table->String('diembuoi4');
            $table->String('buoi5');
            $table->String('diembuoi5');
            $table->String('buoi6');
            $table->String('diembuoi6');
            $table->String('buoi7');
            $table->String('diembuoi7');
            $table->String('buoi8');
            $table->String('diembuoi8');
            $table->String('buoi9');
            $table->String('diembuoi9');
            $table->String('buoi10');
            $table->String('diembuoi10');
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
        Schema::dropIfExists('table_diemdanhtest');
    }
}
