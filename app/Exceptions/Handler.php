<?php

namespace App\Exceptions;

use App\Http\Responses\ApiResponse;
use App\Http\Responses\StatusCode;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
        });
    }
  /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function render($request, Throwable $exception)
    {
        // if ($exception instanceof ModelNotFoundException) {
        //     return ApiResponse::error('Resource not found.', StatusCode::NOT_FOUND , $exception->getMessage());
        // }

        // if ($exception instanceof ValidationException) {
        //     return ApiResponse::error('Validation failed.', StatusCode::BAD_REQUEST , $exception->errors());
        // }

        // if ($exception instanceof UnauthorizedHttpException) {
        //     return ApiResponse::error('Unauthorized access.', StatusCode::UNAUTHORIZED , $exception->getMessage());
        // }

        // if ($exception instanceof AuthorizationException) {
        //     return ApiResponse::error('Forbidden access.', StatusCode::FORBIDDEN , $exception->getMessage());
        // }

        // if ($exception instanceof NotFoundHttpException) {
        //     return ApiResponse::error('Route not found.', StatusCode::NOT_FOUND , $exception->getMessage());
        // }

        // if ($exception instanceof MethodNotAllowedHttpException) {
        //     return ApiResponse::error('Method not allowed.', StatusCode::METHOD_NOT_ALLOWED , $exception->getMessage());
        // }
        return parent::render($request, $exception);
    }
}
