<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    protected $table = 'news';

    public function getTitle(){
        return $this->hasOne(Translates::class, 'id', 'title');
    }

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

}
