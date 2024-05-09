<?php

namespace App\Domain\Services\Address;

use App\Domain\Entities\Address;
use App\Domain\Repositories\Address\AddressRepository;

class AddressService
{
    public function __construct(private AddressRepository $addressRepository)
    {
    }

    /**
     * Store a new Address resource
     *
     * @return Address
     */
    public function store(array $data)
    {
        return $this->addressRepository->create($data);
    }
}
