<?php
namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * Return a successful response.
     *
     * @param  mixed  $data
     * @param  int  $status
     * @return JsonResponse
     */
    public static function success(

        $message = 'Success', $status = 200, $data = [],  ): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
            'status' => $status
        ], $status);
    }

    /**
     * Return an error response.
     *
     * @param  string  $message
     * @param  int  $status
     * @param  array  $errors
     * @return JsonResponse
     */
    public static function error($message = 'Error occurred', $status = 400, $errors = [],  ): JsonResponse
    {
        return response()->json([
            'success' => false,
            'data' => null,
            'message' => $message,
            'errors' => $errors,
            'status' => $status
        ], $status);
    }
}

class StatusCode
{
    static const OK = 200;
    static const CREATED = 201;
    static const NO_CONTENT = 204;
    static const BAD_REQUEST = 400;
    static const UNAUTHORIZED = 401;
    static const FORBIDDEN = 403;
    static const NOT_FOUND = 404;
    static const UNPROCESSABLE_ENTITY = 422;
    static const PAYMENT_REQUIRED = 402;
    static const METHOD_NOT_ALLOWED = 405;
    static const TOO_MANY_REQUEST = 429;
    static const CONFLICT = 409;
    static const INTERNAL_SERVER_ERROR = 500;
}
