<?php

namespace App\Http\Resources\ProductImage;

use Helper;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductImageResource extends JsonResource
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
            'product_id'    => $this->product_id,
            'product_image' => $this->product_image,            
            'image_path'    => Helper::publicUrl('/').'/'.'images/manufacturer/'.$this->product_image,
         
        ];
    }
}
