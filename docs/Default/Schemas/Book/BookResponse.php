<?php

namespace Docs\Default\Schemas\Book;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class BookResponse
{
    /**
     * @OA\Property(
     *     title="Name",
     *     description="Book name",
     * )
     */
    public string $name;

    /**
     * @OA\Property(
     *     title="ISBN",
     *     description="Book ISBN",
     * )
     */
    public int $isbn;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Book value",
     * )
     */
    public float $value;
}