<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_sinhvien extends Model
{
    protected $table = 'table_sinhvien';
    protected $fillable = ['msv','hoten','lop','mahocphan','tenmonhoc','email','giaovien',];
    public $timestamps = false;

}
