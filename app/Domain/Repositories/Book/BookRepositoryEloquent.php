<?php

namespace App\Domain\Repositories\Book;

use App\Domain\Entities\Book;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class BookRepositoryEloquent.
 */
class BookRepositoryEloquent extends BaseRepository implements BookRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Book::class;
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
                        $query->where('name', 'LIKE', '%'.$value.'%');
                    });
                }),
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
