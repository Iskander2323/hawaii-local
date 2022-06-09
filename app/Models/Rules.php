<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table = 'rules';

    public $timestamps = false;

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

    public function getTitle() 
  {
      return $this->hasOne(Translates::class, 'id', 'title');
  }
}