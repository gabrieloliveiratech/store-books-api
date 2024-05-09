<?php

namespace App\Domain\Services\Store;

use App\Domain\Entities\Store;
use App\Domain\Repositories\Store\StoreRepository;
use App\Domain\Services\Address\AddressService;
use App\Domain\Services\Book\BookService;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class StoreService
{
    public function __construct(
        private StoreRepository $storeRepository,
        private BookService $bookService,
        private AddressService $addressService
    ) {
    }

    /**
     * Get an Store instance by ID
     *
     * @param  int  $id
     * @return Store
     */
    public function getById($id)
    {
        return $this->storeRepository->find($id);
    }

    /**
     * Get all registers
     *
     * @return LengthAwarePaginator
     */
    public function getAll()
    {
        return $this->storeRepository->getAll();
    }

    /**
     * Store a new store resource
     *
     * @return Store
     */
    public function store(array $data)
    {
        $store = $this->storeRepository->create($data);
        if (isset($data['address']) && ! empty($data['address'])) {
            $data['address']['addressable_type'] = Store::class;
            $data['address']['addressable_id'] = $store->id;
            $this->addressService->store($data['address']);
        }

        return $store;
    }

    /**
     * Update a store resource
     *
     * @return Store
     */
    public function update(array $data, Store $store)
    {
        return $this->storeRepository->update($data, $store->id);
    }

    /**
     * Attach a book to a store
     *
     * @return Store
     */
    public function attachBook(int $storeId, int $bookId)
    {
        $store = $this->storeRepository->find($storeId);
        $book = $this->bookService->getById($bookId);
        $store->books()->syncWithoutDetaching([$book->id]);

        return $store;
    }

    public function removeBook(int $storeId, int $bookId)
    {
        $store = $this->storeRepository->find($storeId);
        $book = $this->bookService->getById($bookId);
        $store->books()->wherePivot('book_id', $book->id)->update(['book_store.deleted_at' => now()]);

        return $store;
    }
}
