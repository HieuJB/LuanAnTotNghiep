<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_cauhoidiemdanh extends Model
{
    protected $table = 'table_cauhoidiemdanh';
    protected $fillable= ['cauhoi','ansa','ansb','ansc','ansd','caucx','buoi','mahocphan','monhoc','giaovien'];
    // use HasFactory;
}
