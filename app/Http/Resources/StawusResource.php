<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StawusResource extends JsonResource
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
            'service' => $this->servis, 
            'market' => $this->market,  
            'num1' => $this->num1, 
            'num2' => $this->num2, 
        ];
    }
}
