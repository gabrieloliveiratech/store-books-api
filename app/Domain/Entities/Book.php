<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Book.
 *
 * @package namespace App\Domain\Entities\Book;
 */
class Book extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'isbn',
        'value',
    ];

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

}
