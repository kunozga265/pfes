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
            'carbs'     => floatval($this->carbs),
            'protein'   => floatval($this->protein),
            'fiber'     => floatval($this->fiber),
            'fat'       => floatval($this->fat),
            'energy'    => floatval($this->energy),
            'date'      => floatval($this->date),
            'meal'      => $this->meal,
            'foods'     => $this->foods,
            'quantity'  => floatval($this->quantity),
        ];
    }
}
