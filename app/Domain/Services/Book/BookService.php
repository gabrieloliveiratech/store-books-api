<?php

namespace App\Domain\Services\Book;

use App\Domain\Entities\Book;
use App\Domain\Repositories\Book\BookRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BookService
{
    public function __construct(private BookRepository $bookRepository)
    {
    }

    /**
     * Get an Book instance by ID
     * 
     * @param int $book
     * @return Book
     */
    public function getById($id)
    {
        return $this->bookRepository->find($id);
    }

    /**
     * Get all registers
     * 
     * @return LengthAwarePaginator
     */
    public function getAll()
    {
        return $this->bookRepository->getAll();
    }

    /**
     * Store a new Book resource
     * 
     * @param array $data
     * @return Book
     */
    public function store(array $data)
    {
        return $this->bookRepository->create($data);
    }

    /**
     * Update a Book resource
     * 
     * @param array $data
     * @param Book $book
     * @return Book
     */
    public function update(array $data, Book $book)
    {
        return $this->bookRepository->update($data, $book->id);
    }
}
