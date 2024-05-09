<?php

namespace App\Domain\Http\Controllers\Book;

use App\Domain\Http\Requests\Book\BookStoreRequest;
use App\Domain\Entities\Book;
use App\Domain\Services\Book\BookService;
use App\Domain\Http\Requests\Book\BookUpdateRequest;
use App\Infrastructure\Laravel\Controller;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function __construct(private BookService $bookService)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll($this->bookService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookStoreRequest
     * @return \Illuminate\Http\Response
     */
    public function store(BookStoreRequest $request)
    {
        return $this->showOne($this->bookService->store($request->validated()), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $this->showOne($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BookUpdateRequest $request
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(BookUpdateRequest $request, Book $book)
    {
        return $this->showOne($this->bookService->update($request->validated(), $book), Response::HTTP_OK);
    }

    /**
     * ***-PUT YOUR LOGIC TO DELETE-*** 
     *
     * @param  Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        return $this->showMessage('Success');
    }
}
