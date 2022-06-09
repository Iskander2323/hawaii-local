<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translates;

class Price extends Model
{
    protected $table = 'price';

    public $timestamps = false;

    public function getDescription(){
      return $this->hasOne(Translates::class, 'id', 'description');
    }

    public function getChildTitle(){
        return $this->hasOne(Translates::class, 'id', 'child_ticket_title');
    }

    public function getChildHour(){
        return $this->hasOne(Translates::class, 'id', 'time_hour_child');
    }

    public function getChildDay(){
        return $this->hasOne(Translates::class, 'id', 'time_day_child');
    }
    
    public function getChildSpa(){
        return $this->hasOne(Translates::class, 'id', 'spa_child');
    }

    public function getAdultTitle(){
        return $this->hasOne(Translates::class, 'id', 'adult_ticket_title');
    }

    public function getAdultHour(){
        return $this->hasOne(Translates::class, 'id', 'time_hour_adult');
    }

    public function getAdultDay(){
        return $this->hasOne(Translates::class, 'id', 'time_day_adult');
    }
    
    public function getAdultSpa(){
        return $this->hasOne(Translates::class, 'id', 'spa_adult');
    }
    
}