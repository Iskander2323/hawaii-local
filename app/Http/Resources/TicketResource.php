<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ticket_title' => $this->getTicketTitle,  
            'short_description' => $this->getShortDescription,
            'adult_ticket' => $this->getAdultTicket,
            'adult_actual_price' => $this->adult_actual_price,
            'adult_old_price' => $this->adult_old_price,
            'child_ticket' => $this->getChildTicket,
            'child_actual_price' => $this->child_actual_price,
            'child_old_price' => $this->child_old_price,
            'large_description' => $this->getLargeDescription,
        ];
    }
}