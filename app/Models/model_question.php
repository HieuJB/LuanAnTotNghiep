<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_question extends Model
{
    protected $table = 'table_questions';
    protected $fillable= ['question','ansa','ansb','ansc','ansd','ansCX','ansPL'];
    // public $timestamps = false;


}
