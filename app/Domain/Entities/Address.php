<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Address.
 *
 * @package namespace App\Domain\Entities;
 */
class Address extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'number',
        'district',
        'city',
        'state',
        'country',
        'complement',
        'zip_code',
        'addressable_id',
        'addressable_type',
    ];

    public function addressable()
    {
        return $this->morphTo();
    }
}
