<?php

namespace App\Http\Resources\Manufacturer;
use Helper;

use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturerResource extends JsonResource
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
            'id'                => $this->id,
            'manufacturer_name' => $this->manufacturer_name,
            'description'       => $this->description,
            'status'            => $this->status,
            'statusText'        => $this->status == 1?'Active':'Inactive',
            'image_name'        => '<img style="width:60px; height:60px;" class="img-fluid" src="'.Helper::publicUrl('/').'/'.'images/manufacturer/'.$this->image_name.'">',            
            'image_path'        => Helper::publicUrl('/').'/'.'images/manufacturer/'.$this->image_name,
         
        ];
    }
}
