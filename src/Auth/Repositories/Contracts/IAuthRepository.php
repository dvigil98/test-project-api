<?php

namespace Src\Auth\Repositories\Contracts;

interface IAuthRepository
{
    public function getUserByEmail($email);
}
