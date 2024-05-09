<?php

namespace App\Domain\Http\Resources\Address;

use App\Domain\Http\Resources\Book\BookResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'id' => $this->id,
            'street' => $this->street,
            'number' => $this->number,
            'district' => $this->district,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'complement' => $this->complement,
            'zip_code' => $this->zip_code,
        ];
    }
}
