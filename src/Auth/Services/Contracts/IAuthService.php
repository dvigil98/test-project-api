<?php

namespace Src\Auth\Services\Contracts;

interface IAuthService
{
    public function login($email, $password);
    public function logout();
}
