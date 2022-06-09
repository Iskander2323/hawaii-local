<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Translates;

class Ticket extends Model
{
    use HasFactory;

  protected $table = 'tickets';

  protected $primaryKey = 'id';
  
  protected $fillable = ['ticket_title', 'short_description', 'adult_ticket', 'adult_actual_price', 'adult_old_price', 'child_ticket', 'child_actual_price', 'child_old_price', 'large_description', 'status'];

  public function getTicketTitle() 
  {
      return $this->hasOne(Translates::class, 'id', 'ticket_title');
  }

  public function getShortDescription() 
  {
      return $this->hasOne(Translates::class, 'id', 'short_description');
  }

  public function getAdultTicket()
  {
      return $this->hasOne(Translates::class,'id', 'adult_ticket');
  }

  public function getChildTicket(){
      return $this->hasOne(Translates::class, 'id', 'child_ticket');
  }

  public function getLargeDescription() 
  {
      return $this->hasOne(Translates::class, 'id', 'large_description');
  }

}
