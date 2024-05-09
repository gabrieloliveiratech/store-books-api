<?php

namespace App\Domain\Repositories\User;

use App\Domain\Entities\User;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Domain\Repositories\User\UserRepository;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories\User;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
