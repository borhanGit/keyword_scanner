<?php

namespace App\Http\Resources\Units;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'unit_name'   => $this->unit_name,
            'description' => $this->description,
            'status'      => $this->status,
            'statusText'  => $this->status == 1?'Active':'Inactive',
         ];
    }
}
