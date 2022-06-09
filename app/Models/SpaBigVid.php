<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaBigVid extends Model
{
    public $timestamps = false;

    protected $table = 'spa_big_vid';

    protected $fillable = ['link'];
}