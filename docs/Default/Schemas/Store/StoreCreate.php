<?php

namespace Docs\Default\Schemas\Store;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(required={"name", "active", "address"})
 */
class StoreCreate
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property()
     */
    public bool $active;

    /**
     * @OA\Property(ref="#/components/schemas/Address")
     */
    public $address;
}
