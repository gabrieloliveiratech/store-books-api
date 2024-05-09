<?php

namespace App\Domain\Repositories\Store;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface StoreRepository.
 */
interface StoreRepository extends RepositoryInterface
{
    /**
     * @return LengthAwarePaginator
     */
    public function getAll();
}
