<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
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
            'id'                => intval($this->id),
            'image'             => $this->image,
            'item'              => $this->item,
            'serving_size'      => $this->serving_size,
            'net_weight'        => floatval($this->net_weight),
            'energy'            => floatval($this->energy),
            'carbohydrate'      => floatval($this->carbohydrate),
            'fiber'             => floatval($this->fiber),
            'protein'           => floatval($this->protein),
            'fat'               => floatval($this->fat),
            'more_info'         => $this->more_info,
            'source'            => $this->source,
            'unpeeled_weight'   => floatval($this->unpeeled_weight),
            'group'             => $this->group,
        ];
    }
}
