<?php

namespace Docs\Default\Schemas\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(required={"email", "password"})
 */
class UserLogin
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $email;

    /**
     * @OA\Property(maximum="255")
     */
    public string $password;
}
