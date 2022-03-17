<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            'name'              => $this->name,
            'email'             => $this->email,
            'mobile_no'         => $this->mobile_no,
            'user_id'           => $this->user_id,
            'password'          => $this->password,
            'role'              => $this->role,
            'image_name'        => $this->image_name,
            'image_path'        => $this->image_path,
        ];
    }
}
