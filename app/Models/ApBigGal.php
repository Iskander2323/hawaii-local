<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApBigGal extends Model
{
    public $timestamps = false;

    protected $table = 'ap_big_gal';

    protected $fillable = ['img'];
}