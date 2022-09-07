<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertiesResource extends JsonResource
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
            'organisation' => $this->organisation,
            'property_type' => $this->property_type,
            'parent_property_id' => $this->parent_property_id,
            'uprn' => $this->uprn,
            'address' => $this->address,
            'town' => $this->town,
            'postcode' => $this->postcode,
            'live' => $this->live,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ];
    }
}
