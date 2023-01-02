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
            'id'                => $this->id,
            'image'             => $this->image,
            'item'              => $this->item,
            'serving_size'      => $this->serving_size,
            'net_weight'        => $this->net_weight,
            'energy'            => $this->energy,
            'carbohydrate'      => $this->carbohydrate,
            'fiber'             => $this->fiber,
            'protein'           => $this->protein,
            'fat'               => $this->fat,
            'more_info'         => $this->more_info,
            'source'            => $this->source,
            'unpeeled_weight'   => $this->unpeeled_weight,
            'group'             => $this->group,
        ];
    }
}
