<?php

namespace Src\Auth\Repositories;

use Src\Auth\Repositories\Contracts\IAuthRepository;
use Src\Users\Models\User;

class AuthRepository implements IAuthRepository
{
    public function getUserByEmail($email)
    {
        try {
            $user = User::with('role')->where('email', $email)->first();
            return $user;
        } catch (\Throwable $th) {
            return null;
        }
    }
}
