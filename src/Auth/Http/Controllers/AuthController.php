<?php

namespace Src\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Responses\RespondsWithHttpStatus;
use Src\Auth\Services\Contracts\IAuthService;
use Src\Auth\Http\Requests\AuthFormRequest;
use Src\Auth\Http\Resources\AuthenticatedUserResource;

class AuthController extends Controller
{
    use RespondsWithHttpStatus;

    private $authService;

    public function __construct(IAuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(AuthFormRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        $user = $this->authService->getUserByEmail($credentials['email']);

        if (empty($user))
            return $this->response(401, 'Usuario no existe');

        if ($user->active == 0)
            return $this->response(401, 'Usuario desactivado');

        if (!$token = auth()->attempt($credentials))
            return $this->response(401, 'Credenciales invalidas');

        return $this->responseWithData(
            200,
            'Peticion exitosa',
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
