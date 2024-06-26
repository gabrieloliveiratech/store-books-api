<?php

namespace App\Domain\Traits;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

trait ApiExceptionHandlerTrait
{
    public function handleApiExceptions(Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return $this->generateResponse('Route doesn\'t exist', Response::HTTP_NOT_FOUND);
        } elseif ($exception instanceof AccessDeniedHttpException || $exception instanceof AuthorizationException) {
            return $this->generateResponse('Access denied', Response::HTTP_FORBIDDEN);
        } elseif ($exception instanceof BadRequestHttpException) {
            return $this->generateResponse('Bad request', Response::HTTP_BAD_REQUEST);
        } elseif ($exception instanceof ModelNotFoundException) {
            return $this->generateResponse('Resource not found', Response::HTTP_NOT_FOUND);
        } elseif ($exception instanceof MethodNotAllowedHttpException) {
            return $this->generateResponse('Method not allowed', Response::HTTP_METHOD_NOT_ALLOWED);
        } elseif ($exception instanceof AuthenticationException) {
            return $this->generateResponse('Unauthenticated', Response::HTTP_UNAUTHORIZED);
        } elseif ($exception instanceof ValidationException) {
            return $this->handleValidationException($exception);
        } elseif ($this->isUniqueConstraintViolationException($exception)) {
            $errorMessage = $exception->getMessage();
            $constraintKey = $this->extractConstraintKey($errorMessage);

            return $this->generateResponse("Unique constraint violation for key '$constraintKey'", Response::HTTP_CONFLICT);
        }

        return $this->generateResponse('Server error', $this->isValidHttpStatus($exception->getCode()) ? $exception->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    private function handleValidationException(ValidationException $exception)
    {
        $errors = $exception->errors();

        return response()->json(['error' => 'Validation error', 'errors' => $errors], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    private function generateResponse($message, $statusCode)
    {
        return response()->json([
            'error' => $message,
        ], $statusCode);
    }

    private function isUniqueConstraintViolationException(Throwable $exception)
    {
        return $exception instanceof \Illuminate\Database\QueryException && $exception->getCode() == '23000';
    }

    private function extractConstraintKey(string $errorMessage)
    {
        preg_match("/key '(.+?)'/", $errorMessage, $matches);

        return $matches[1] ?? 'Unknown';
    }

    private function isValidHttpStatus($code)
    {
        return $code >= 100 && $code < 600;
    }
}
