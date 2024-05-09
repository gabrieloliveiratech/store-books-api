<?php

namespace Docs\Default\Http\Controllers\Book;

use OpenApi\Annotations as OA;

class BookController
{
    /**
     * @OA\Post(
     *      tags={"Books"},
     *      path="/books",
     *      summary="Add a new book",
     *
     *      @OA\RequestBody(
     *          description="",
     *          required=true,
     *
     *          @OA\JsonContent(ref="#/components/schemas/BookCreate"),
     *      ),
     *
     *      @OA\Response(
     *          response=201,
     *          description="Success",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/BookResponse")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=409,
     *          description="Conflict",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/RequestException")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Invalid input",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/Unprocessable")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(
     *
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Put(
     *      tags={"Books"},
     *      path="/books/{book_id}",
     *      summary="Update a book",
     *
     *      @OA\RequestBody(
     *          description="",
     *
     *          @OA\JsonContent(ref="#/components/schemas/BookUpdate"),
     *      ),
     *
     *      @OA\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Bearer Token",
     *          required=true,
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          in="path",
     *          name="book_id",
     *          description="",
     *          required=true,
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/BookResponse")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/Unprocessable")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(
     *
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function update()
    {
    }

    /**
     * @OA\Get(
     *      tags={"Books"},
     *      path="/books",
     *      summary="Get all books with optional name filter and pagination",
     *
     *      @OA\Parameter(
     *          name="filter[name]",
     *          in="query",
     *          required=false,
     *
     *          @OA\Schema(type="string"),
     *          description="Filter books by name"
     *      ),
     *
     *      @OA\Parameter(
     *          name="page[size]",
     *          in="query",
     *          required=false,
     *
     *          @OA\Schema(type="integer"),
     *          description="Number of records per page"
     *      ),
     *
     *      @OA\Parameter(
     *          name="page[number]",
     *          in="query",
     *          required=false,
     *
     *          @OA\Schema(type="integer"),
     *          description="Page number"
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/BookResponse"))
     *      ),
     *
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *
     *          @OA\JsonContent(ref="#/components/schemas/Unprocessable")
     *      )
     * )
     */
    public function index()
    {
    }

    /**
     * @OA\Get(
     *      tags={"Books"},
     *      path="/books/{book_id}",
     *      summary="Get a book",
     *
     *      @OA\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Bearer Token",
     *          required=true,
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          in="path",
     *          name="book_id",
     *          description="",
     *          required=true,
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/BookResponse")
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(
     *
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function show()
    {
    }
}
