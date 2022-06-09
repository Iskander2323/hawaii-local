<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataproc extends Model
{
    protected $table = 'dataproc';
    public $timestamps = false;

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

    public function getTitle() 
  {
      return $this->hasOne(Translates::class, 'id', 'title');
  }
}