<?php

namespace Docs\Default\Schemas\Address;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class Address
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $street;

    /**
     * @OA\Property(maximum="255")
     */
    public string $number;

    /**
     * @OA\Property(maximum="255")
     */
    public string $district;

    /**
     * @OA\Property(maximum="255")
     */
    public string $city;

    /**
     * @OA\Property(maximum="255")
     */
    public string $state;

    /**
     * @OA\Property(maximum="255")
     */
    public string $country;

    /**
     * @OA\Property(maximum="255")
     */
    public string $complement;

    /**
     * @OA\Property(maximum="255")
     */
    public string $zip_code;
}
