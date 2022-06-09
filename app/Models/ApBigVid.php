<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApBigVid extends Model
{
    public $timestamps = false;

    protected $table = 'ap_big_vid';

    protected $fillable = ['link'];
}