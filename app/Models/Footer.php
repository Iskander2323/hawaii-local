<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $table = 'footer';
    
    public $timestamps = false;

    public function getTitle(){
        return $this->hasOne(Translates::class, 'id', 'title');
    }


    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

}