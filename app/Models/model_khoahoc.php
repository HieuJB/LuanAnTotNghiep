<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_khoahoc extends Model
{
    protected $table='table_khoahoc';
    protected $fillable= ['tieude','mota','link','file'];   
}
