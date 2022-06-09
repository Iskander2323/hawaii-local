<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translates;

class Menu extends Model
{
    protected $table = 'menu';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['description', 'open_menu', 'open_menu_florida', 'open_menu_aloha'];

    public function getDescription(){
        return $this->hasOne(Translates::class, 'id', 'description');
    }

    public function getOpenMenu(){
        return $this->hasOne(Translates::class, 'id', 'open_menu');
    }

    public function getMenuFlorida(){
        return $this->hasOne(Translates::class, 'id', 'open_menu_florida');
    }
    
    public function getMenuAloha(){
        return $this->hasOne(Translates::class, 'id', 'open_menu_aloha');
    }

}