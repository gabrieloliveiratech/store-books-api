<?php

namespace Docs\Default\Schemas\Store;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class StoreResponse
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property()
     */
    public int $active;

    /**
     * @OA\Property(
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/BookResponse")
     * )
     */
    public array $books;

    /**
     * @OA\Property(
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/Address")
     * )
     */
    public array $addresses;
}