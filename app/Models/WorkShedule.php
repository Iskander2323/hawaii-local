<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkShedule extends Model
{
    protected $table = 'work_shedule';

    protected $fillable = ['shedule_description'];

    protected $primaryKey = 'id';

    public $timestamps = false;

  

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'shedule_description');
    }
    
}