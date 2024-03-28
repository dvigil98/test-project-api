<?php

namespace App\Http\Responses;

trait RespondsWithHttpStatus
{
    protected function response($code = 200, $message = '', $data = [])
    {
        return response()->json([
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
