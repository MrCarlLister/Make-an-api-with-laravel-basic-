<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        // NOTE: Or you can return your own data or creating new data
        // return [
        //     'first_name' => $this->first_name,
        //     'last_name' => $this->last_name
        // ];
    }
}
