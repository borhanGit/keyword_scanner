<?php

namespace App\Http\Resources\Generic;

use Illuminate\Http\Resources\Json\JsonResource;

class GenericResource extends JsonResource
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
            'id'           => $this->id,
            'generic_name' => $this->generic_name,
            'description'  => $this->description,
            'status'       => $this->status,
            'statusText'   => $this->status == 1?'Active':'Inactive',
         ];
    }
}
