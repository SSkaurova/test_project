<?php

namespace App\Http;

use app\Http\ResponseCode;

class ResponseHandler
{
    public static function success(ResponseCode $code, $data = null, $additionalInfo = [])
    {
        $response = [
            'message' => $code->message(),
            'response_code' => $code->value,
            'data' => $data,
        ];

        return response()->json(array_merge($response, $additionalInfo), $code->value);
    }

    public static function error(ResponseCode $code, string $error, string $reason, ?string $resolution_options)
    {
        return response()->json([
            'error_code' => $code->value,
            'error' => $error,
            'reason' => $reason,
            'resolution' => $resolution_options,
        ], $code->value);
    }
}
