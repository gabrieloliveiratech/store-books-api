<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Store.
 *
 * @package namespace App\Domain\Entities;
 */
class Store extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active'
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class)->withTimestamps()->wherePivot('deleted_at', '=', null);
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
