<?php

namespace Docs\Default\Schemas\Store;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class StoreResource
{
    /**
     * @OA\Property()
     */
    public StoreResponse $data;

    /**
     * @OA\Property()
     */
    public int $statusCode;

    /**
     * @OA\Property(ref="#/components/schemas/Meta")
     */
    public $meta;

    /**
     * @OA\Property(ref="#/components/schemas/Links")
     */
    public $links;
}
