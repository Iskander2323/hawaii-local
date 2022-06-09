<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePolicy extends Model
{
    protected $table = 'site_policy';

    public function getTitle(){
        return $this->hasOne(Translates::class, 'id', 'title');
    }

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }
    
}