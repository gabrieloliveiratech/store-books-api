<?php

namespace Docs\Default\Schemas\Book;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(required={"name", "isbn", "value"}))
 */
class BookCreate
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
