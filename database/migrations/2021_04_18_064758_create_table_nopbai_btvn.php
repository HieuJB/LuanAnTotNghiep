<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNopbaiBtvn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_nopbai_btvn', function (Blueprint $table) {
            $table->id();
            $table->String('msv');
            $table->String('hoten');
            $table->String('lop');
            $table->String('mahocphan');
            $table->String('tenmonhoc');
            $table->String('ngayhancuoi');
            $table->String('giohancuoi');
            $table->String('filedinhkem');
            $table->String('ghichu');
            $table->String('ramdom');
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
        Schema::dropIfExists('table_nopbai_btvn');
    }
}
