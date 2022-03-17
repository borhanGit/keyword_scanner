<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'            => $this->id,
            'category_name' => $this->category_name,
            'description'   => $this->description,
            'status'        => $this->status,
            'statusText'        => $this->status == 1?'Active':'Inactive',
         ];
    }
}
