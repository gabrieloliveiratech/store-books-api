<?php

namespace App\Domain\Services\User;

use App\Domain\Entities\User;
use App\Domain\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserService
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    /**
     * Get an user instance by ID
     *
     * @param  User  $user
     * @return User
     */
    public function getById($user)
    {
        return $this->userRepository->find($user->id);
    }

    /**
     * Get all registers
     *
     * @return LengthAwarePaginator
     */
    public function getAll()
    {
        return $this->userRepository->all();
    }

    /**
     * Store a new User resource
     *
     * @return User
     */
    public function store(array $data)
    {
        return $this->userRepository->create($data);
    }

    /**
     * Update a User resource
     *
     * @return User
     */
    public function update(array $data, User $user)
    {
        return $this->userRepository->update($data, $user->id);
    }
}
