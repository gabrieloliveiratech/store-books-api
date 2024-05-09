<?php

namespace Docs\Default\Schemas\Auth;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AuthResponse
{
    /**
     * @OA\Property(maximum="255")
     */
    public string $access_token;

    /**
     * @OA\Property(maximum="255")
     */
    public string $token_type;

    /**
     * @OA\Property()
     */
    public int $expires_in;
}
