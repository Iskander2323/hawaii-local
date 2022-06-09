<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    
    protected $table = 'order';


    public function UserID()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function getOrder()
    {
        $records = DB::table('order')->select('id','user_id','name','email','phone_number','payment_type','client_ip', 'ticket_title', 'adult_price', 'adult_number','child_price','child_number','total', 'created_at')->get()->toArray();
        return $records;
    }
    
}