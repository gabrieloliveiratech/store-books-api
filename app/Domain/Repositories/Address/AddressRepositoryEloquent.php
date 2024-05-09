<?php

namespace App\Domain\Repositories\Address;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Domain\Repositories\Address\AddressRepository;
use App\Domain\Entities\Address;
use App\Domain\Validators\Address\AddressValidator;

/**
 * Class AddressRepositoryEloquent.
 *
 * @package namespace App\Domain\Repositories\Address;
 */
class AddressRepositoryEloquent extends BaseRepository implements AddressRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Address::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
