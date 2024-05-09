<?php

namespace App\Domain\Http\Controllers\Store;

use App\Domain\Entities\Store;
use App\Domain\Http\Requests\Store\StoreStoreRequest;
use App\Domain\Http\Requests\Store\StoreUpdateRequest;
use App\Domain\Http\Resources\Store\StoreResource;
use App\Domain\Services\Store\StoreService;
use App\Infrastructure\Laravel\Controller;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    public function __construct(private StoreService $storeService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll($this->storeService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStoreRequest
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        return $this->showOne($this->storeService->store($request->validated()), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        return $this->showOne($store);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateRequest $request, Store $store)
    {
        return $this->showOne($this->storeService->update($request->validated(), $store), Response::HTTP_OK);
    }

    /**
     * ***-PUT YOUR LOGIC TO DELETE-***
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        return $this->showMessage('Success');
    }

    public function addBook(int $storeId, int $bookId)
    {
        return $this->showOne($this->storeService->attachBook($storeId, $bookId), Response::HTTP_OK, StoreResource::class);
    }

    public function removeBook(int $storeId, int $bookId)
    {
        return $this->showOne($this->storeService->removeBook($storeId, $bookId), Response::HTTP_OK, StoreResource::class);
    }
}
