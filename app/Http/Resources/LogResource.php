<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
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
            'id'        => floatval($this->id),
            'date'      => floatval($this->date),
            'meal'      => $this->meal,
            'food'      => $this->food,
            'quantity'  => floatval($this->quantity),
        ];
    }
}
