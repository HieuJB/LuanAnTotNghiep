<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDiemdanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_diemdanh', function (Blueprint $table) {
            $table->id();
            $table->String('msv');
            $table->String('hoten');
            $table->String('lop');
            $table->String('buoi');
            $table->String('diem');
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
        Schema::dropIfExists('table_diemdanh');
    }
}
