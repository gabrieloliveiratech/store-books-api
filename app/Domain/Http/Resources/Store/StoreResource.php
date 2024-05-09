<?php

namespace App\Domain\Http\Resources\Store;

use App\Domain\Http\Resources\Address\AddressResource;
use App\Domain\Http\Resources\Book\BookResource;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            'name' => $this->name,
            'active' => (bool) $this->active,
            'books' => BookResource::collection($this->books),
            'addresses' => AddressResource::collection($this->addresses),
        ];
    }
}
