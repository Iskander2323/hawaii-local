<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
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
            'description' => $this->getDescription,  
            'child_title' => $this->getChildTitle,
            'child_hour' => $this->getChildHour,
            'child_day' => $this->getChildDay,
            'child_spa' => $this->getChildSpa,
            'adult_title' => $this->getAdultTitle,
            'adult_hour' => $this->getAdultHour,
            'adult_day' => $this->getAdultDay,
            'adult_spa' => $this->getAdultSpa,
            'child_hour_price' => $this->time_hour_price_child,
            'child_day_price' => $this->time_day_price_child,
            'child_spa_price' => $this->spa_child_price,
            'adult_hour_price' => $this->time_hour_price_adult,
            'adult_day_price' => $this->time_day_price_adult,
            'adult_spa_price' => $this->spa_adult_price,
        ];
    }
}