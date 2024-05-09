<?php

namespace App\Domain\Repositories\Store;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Domain\Repositories\Store\StoreRepository;
use App\Domain\Entities\Store;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class StoreRepositoryEloquent.
 *
 * @package namespace App\Domain\Repositories\Store;
 */
class StoreRepositoryEloquent extends BaseRepository implements StoreRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Store::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    /**
     * Return build Eloquent query
     *
     * @param  \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|string  $queryBuilder
     * @return LengthAwarePaginator
     */
    private function queryBuilder($queryBuilder)
    {
        return QueryBuilder::for($queryBuilder)
            ->allowedFilters([
                'id',
                AllowedFilter::callback('name', function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $query->where('name', 'LIKE', '%' . $value . '%');
                    });
                }),
                AllowedFilter::exact('active')
            ])->jsonPaginate();
    }


    /**
     * @return LengthAwarePaginator
     */
    public function getAll()
    {
        return $this->queryBuilder($this->model());
    }
}
