<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaPrice extends Model
{
    protected $table = 'spa_price';

    protected $fillable = ['file'];

    public $timestamps = false;

}