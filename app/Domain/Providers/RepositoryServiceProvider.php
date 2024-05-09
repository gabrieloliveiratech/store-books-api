<?php

namespace App\Domain\Providers;

use App\Domain\Repositories\Address\AddressRepository;
use App\Domain\Repositories\Address\AddressRepositoryEloquent;
use App\Domain\Repositories\Book\BookRepository;
use App\Domain\Repositories\Book\BookRepositoryEloquent;
use App\Domain\Repositories\Store\StoreRepository;
use App\Domain\Repositories\Store\StoreRepositoryEloquent;
use App\Domain\Repositories\User\UserRepository;
use App\Domain\Repositories\User\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BookRepository::class, BookRepositoryEloquent::class);
        $this->app->bind(StoreRepository::class, StoreRepositoryEloquent::class);
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(AddressRepository::class, AddressRepositoryEloquent::class);
    }
}
