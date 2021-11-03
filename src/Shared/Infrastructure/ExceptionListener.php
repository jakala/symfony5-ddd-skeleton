<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

final class ExceptionListener
{
    public function onException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        $errors = [];
        while (!is_null($exception->getPrevious())) {
            $errors[] = [
                'message' => $exception->getMessage(),
                'code' => $exception->getCode(),
            ];
            $exception = $exception->getPrevious();
        }

        $newData = [
            'success' => false,
            'errors' => $errors
        ];

        $event->setResponse(new JsonResponse($newData));
    }
}
