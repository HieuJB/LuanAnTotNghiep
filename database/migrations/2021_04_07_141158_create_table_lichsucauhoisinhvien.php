<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLichsucauhoisinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_lichsucauhoisinhvien', function (Blueprint $table) {
            $table->id();
            $table->String('mahocphan');
            $table->String('buoi_hoc');
            $table->String('giaovien');
            $table->String('lat');
            $table->String('long');
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
        Schema::dropIfExists('table_lichsucauhoisinhvien');
    }
}
