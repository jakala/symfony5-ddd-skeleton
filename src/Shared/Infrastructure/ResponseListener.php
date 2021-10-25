<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

final class ResponseListener
{
    public function onResponse(ResponseEvent $event): void
    {
        if (! $this->validate($event)) {
            return;
        }

        $data = json_decode($event->getResponse()->getContent(), true);
        $newData = [
            'success' => true,
            'data' => $data,
        ];

        $event->setResponse(new JsonResponse($newData));
    }

    private function validate(ResponseEvent $event): bool
    {
        return match (true) {
            !$event->isMasterRequest(), !$event->getResponse()->isSuccessful()=> false,
            default => true
        };
    }
}
