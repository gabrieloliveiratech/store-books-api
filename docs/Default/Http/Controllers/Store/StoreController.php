<?php

namespace Docs\Default\Http\Controllers\Store;

use OpenApi\Annotations as OA;

class StoreController
{
    /**
     * @OA\Post(
     *      tags={"Stores"},
     *      path="/stores",
     *      summary="Add a new store",
     *
     *      @OA\RequestBody(
     *          description="",
     *          required=true,
     *
     *          @OA\JsonContent(ref="#/components/schemas/StoreCreate"),
     *      ),
     *
     *      @OA\Response(
     *          response=201,
     *          description="Success",
     *
     *          @OA\MediaType(
     *              mediaType="application/json",
     *
     *              @OA\Schema(ref="#/components/schemas/StoreResponse")
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
     *      tags={"Stores"},
     *      path="/stores/{store_id}",
     *      summary="Update a store",
     *
     *      @OA\RequestBody(
     *          description="",
     *
     *          @OA\JsonContent(ref="#/components/schemas/StoreUpdate"),
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
     *          name="store_id",
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
     *              @OA\Schema(ref="#/components/schemas/StoreResponse")
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
     *      tags={"Stores"},
     *      path="/stores",
     *      summary="Get all stores with optional name filter and pagination",
     *
     *      @OA\Parameter(
     *          name="filter[name]",
     *          in="query",
     *          required=false,
     *          @OA\Schema(type="string"),
     *          description="Filter stores by name"
     *      ),
     *      @OA\Parameter(
     *          name="filter[active]",
     *          in="query",
     *          required=false,
     *          @OA\Schema(type="string"),
     *          description="Filter stores by active: false or true"
     *      ),
     *
     *      @OA\Parameter(
     *          name="page[size]",
     *          in="query",
     *          required=false,
     *          @OA\Schema(type="integer"),
     *          description="Number of records per page"
     *      ),
     *
     *      @OA\Parameter(
     *          name="page[number]",
     *          in="query",
     *          required=false,
     *          @OA\Schema(type="integer"),
     *          description="Page number"
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/StoreResource"))
     *      ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Bad Request"}
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Internal Error"}
     *          )
     *      )
     * )
     */
    public function index()
    {
    }

    /**
     * @OA\Get(
     *      tags={"Stores"},
     *      path="/stores/{store_id}",
     *      summary="Get a store",
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
     *          name="store_id",
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
     *              @OA\Schema(ref="#/components/schemas/StoreResponse")
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

    /**
     * @OA\Post(
     *      tags={"Stores"},
     *      path="/stores/{storeId}/books/{bookId}",
     *      summary="Add a book to a store",
     *
     *      @OA\Parameter(
     *          name="storeId",
     *          in="path",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *
     *      @OA\Parameter(
     *          name="bookId",
     *          in="path",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/StoreResource")
     *      ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Bad Request"}
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Internal Error"}
     *          )
     *      )
     * )
     */
    public function addBook($storeId, $bookId)
    {
    }

    /**
     * @OA\Delete(
     *      tags={"Stores"},
     *      path="/stores/{storeId}/books/{bookId}",
     *      summary="Remove a book from a store",
     *
     *      @OA\Parameter(
     *          name="storeId",
     *          in="path",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *
     *      @OA\Parameter(
     *          name="bookId",
     *          in="path",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/StoreResource")
     *      ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Bad Request"}
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              example={"message": "Internal Error"}
     *          )
     *      )
     * )
     */
    public function removeBook($storeId, $bookId)
    {
    }
}