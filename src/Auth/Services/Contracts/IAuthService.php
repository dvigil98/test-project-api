<?php

namespace Src\Auth\Services\Contracts;

interface IAuthService
{
    public function getUserByEmail($email);
}
