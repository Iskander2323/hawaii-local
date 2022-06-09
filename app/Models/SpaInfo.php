<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translates;

class SpaInfo extends Model
{
    use HasFactory;

    protected $table = 'spa_info';

    public function getDescription()
    {
        return $this->hasOne(Translates::class, 'id', 'description');
    }

}
