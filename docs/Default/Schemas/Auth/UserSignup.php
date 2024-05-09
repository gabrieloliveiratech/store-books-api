<?php

namespace Docs\Default\Schemas\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(required={"name", "email", "password"})
 */
class UserSignup
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $name;

    /**
     * @OA\Property(maximum="255")
     */
    public string $email;

    /**
     * @OA\Property(maximum="255")
     */
    public string $password;
}
