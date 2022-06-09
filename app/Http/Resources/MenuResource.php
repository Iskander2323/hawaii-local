<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
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
            'open_menu' => $this->getOpenMenu,
            'file_common'=> $this->file_common,
            'open_menu_florida' => $this->getMenuFlorida,
            'file_florida' => $this->file_florida,
            'open_menu_aloha' => $this->getMenuAloha,
            'file_aloha' => $this->file_aloha,
        ];
    }
}