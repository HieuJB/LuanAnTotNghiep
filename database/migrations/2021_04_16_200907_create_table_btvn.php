<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBtvn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_btvn', function (Blueprint $table) {
            $table->id();
            $table->String('monhoc');
            $table->String('mhp');
            $table->String('tieude');
            $table->String('noidung');
            $table->String('ngayhancuoi');
            $table->String('giohancuoi');
            $table->String('filedinhkem');
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
        Schema::dropIfExists('table_btvn');
    }
}
