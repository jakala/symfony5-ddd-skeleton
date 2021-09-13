<?php
declare(strict_types=1);

namespace App\Infrastructure\Service;

final class MonologRequestProcessor
{
    private $token;
    private $count;
    private float $start;

    public function __invoke(array $record): array
    {
        if (null === $this->token) {
            $this->start = microtime(true);
            $this->token = uniqid('', false);
            $this->count = 0;
        }
        $this->count++;
        $record['extra']['token'] = $this->token . '-' . $this->count ?? "token vacio";
        $duration = microtime(true) - $this->start;
        $record['extra']['duration'] = $duration;

        return $record;
    }

}