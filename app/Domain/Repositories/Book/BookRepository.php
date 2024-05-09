<?php

namespace App\Domain\Repositories\Book;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BookRepository.
 *
 * @package namespace App\Domain\Repositories\Book;
 */
interface BookRepository extends RepositoryInterface
{
    /**
     *  @return LengthAwarePaginator
     */
    public function getAll();
}
