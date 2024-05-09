<?php

namespace Docs\Default\Http\Controllers\Auth;

use OpenApi\Annotations as OA;

class AuthController
{
    /**
     * @OA\Post(
     *      tags={"Auth"},
     *      path="/auth/signup",
     *      summary="User signup",
     *
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UserSignup")
     *      ),
     *
     *      @OA\Response(
     *          response=201,
     *          description="Created",
     *          @OA\JsonContent(ref="#/components/schemas/AuthResponse")
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
    public function signup()
    {
    }

    /**
     * @OA\Post(
     *      tags={"Auth"},
     *      path="/auth/login",
     *      summary="User login",
     *
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UserLogin")
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(ref="#/components/schemas/AuthResponse")
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
    public function login()
    {
    }
}
