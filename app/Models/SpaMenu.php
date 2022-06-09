<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaMenu extends Model
{
    protected $table = 'spa_menu';

    protected $fillable = ['file'];

    public $timestamps = false;
    
}