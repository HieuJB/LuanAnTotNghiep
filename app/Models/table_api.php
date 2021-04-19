<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_api extends Model
{
    protected $table='table_api';
    protected $fillable= ['question','ansa','ansb','ansc','ansd','ansCX'];
    public $timestamps=false;
    use HasFactory;
}
