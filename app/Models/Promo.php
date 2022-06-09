<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promo';

    protected $primaryKey = 'id';
  
    protected $fillable = ['title', 'description', 'img'];
  
    public $timestamps = false;

    public function getTicketTitle() 
    {
        return $this->hasOne(Translates::class, 'id', 'title');
    }
  
    public function getShortDescription() 
    {
        return $this->hasOne(Translates::class, 'id', 'description');
    }
  


}