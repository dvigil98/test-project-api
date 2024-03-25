<?php

namespace Src\Auth\Services;

use Src\Auth\Services\Contracts\IAuthService;
use Src\Auth\Repositories\Contracts\IAuthRepository;

class AuthService implements IAuthService
{
    private $authRepository;

    public function __construct(IAuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function getUserByEmail($email)
    {
        $user = $this->authRepository->getUserByEmail($email);
        return $user;
    }
}
