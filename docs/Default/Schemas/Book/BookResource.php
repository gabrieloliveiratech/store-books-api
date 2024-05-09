<?php

namespace Docs\Default\Schemas\Book;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class BookResource
{
    /**
     * @OA\Property()
     */
    public BookResponse $data;

    
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