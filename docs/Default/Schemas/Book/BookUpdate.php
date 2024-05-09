<?php

namespace Docs\Default\Schemas\Book;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class BookUpdate
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property()
     */
    public int $isbn;

    /**
     * @OA\Property()
     */
    public float $value;
}