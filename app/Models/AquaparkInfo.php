<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translates;

class AquaparkInfo extends Model
{
    use HasFactory;

    protected $table = 'aquapark_info';
    
    public $timestamps = false;

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

}