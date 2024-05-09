<?php

namespace App\Domain\Repositories\Book;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface BookRepository.
 */
interface BookRepository extends RepositoryInterface
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAll();
}
