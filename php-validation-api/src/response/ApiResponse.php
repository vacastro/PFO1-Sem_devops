<?php

class ApiResponse
{
    public static function success($data = [], $message = 'Operation successful')
    {
        return json_encode([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ]);
    }

    public static function error($message = 'An error occurred', $code = 400)
    {
        http_response_code($code);
        return json_encode([
            'status' => 'error',
            'message' => $message
        ]);
    }
}