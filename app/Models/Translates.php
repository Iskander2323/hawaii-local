<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translates extends Model
{

    //string
    protected $table = 'translates';

    //string
    //protected $primaryKey = 'id';

    //array
    protected $fillable = ['ru', 'kz', 'en'];
    
}