<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure;

final class MonologRequestProcessor
{
    private ?string $token = null ;
    private ?int $count = null ;
    private float $start;

    public function __invoke(array $record): array
    {
        if (null === $this->token) {
            $this->start = microtime(true);
            $this->token = uniqid('', false);
            $this->count = 0;
        }
        $this->count++;
        $record['extra']['token'] = $this->token;
        $record['extra']['index'] = $this->count;
        $duration = microtime(true) - $this->start;
        $record['extra']['duration'] = $duration;

        return $record;
    }

    public function token(): ?string
    {
        return $this->token;
    }

    public function count(): ?int
    {
        return $this->count;
    }
}
