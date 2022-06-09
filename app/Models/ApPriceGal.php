<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApPriceGal extends Model
{
    public $timestamps = false;
    
    protected $table = 'ap_price_gal';

    protected $fillable = ['img'];
}