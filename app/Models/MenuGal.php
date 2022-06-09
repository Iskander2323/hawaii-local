<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuGal extends Model
{
    public $timestamps = false;

    protected $table = 'menugal';

    protected $fillable = ['img'];
}