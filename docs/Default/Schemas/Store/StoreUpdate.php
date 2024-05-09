<?php

namespace Docs\Default\Schemas\Store;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class StoreUpdate
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property()
     */
    public bool $active;
}