<?php

namespace Src\Auth\Services;

use Src\Auth\Services\Contracts\IAuthService;
use App\Http\Responses\RespondsWithHttpStatus;
use Src\Auth\Repositories\Contracts\IAuthRepository;
use Src\Auth\Http\Resources\AuthenticatedUserResource;

class AuthService implements IAuthService
{
    use RespondsWithHttpStatus;

    private $authRepository;

    public function __construct(IAuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login($email, $password)
    {
        $credentials = ['email' => $email, 'password' => $password];

        $user = $this->authRepository->getUserByEmail($credentials['email']);

        if (empty($user))
            return $this->response(401, 'Usuario no existe');

        if ($user->active == 0)
            return $this->response(401, 'Usuario desactivado');

        if (!$token = auth()->attempt($credentials))
            return $this->response(401, 'Credenciales invalidas');

        return $this->response(
            200,
            'Sesion iniciada correctamente',
            [
                'user' => new AuthenticatedUserResource($user),
                'access_token' => $token,
                'token_type' => 'Bearer'
            ]
        );
    }

    public function logout()
    {
        auth()->logout();
        return $this->response(200, 'Sesion finalizada correctamente');
    }
}
