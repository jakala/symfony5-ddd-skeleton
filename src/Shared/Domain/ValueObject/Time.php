<?php

declare(strict_types=1);

use App\Shared\Domain\Exception\TimeError;
use App\Shared\Domain\Interface\ValueObject;

class Time implements ValueObject
{
    public const FORMAT = 'Y-m-d';

    public function __construct(private Datetime $time)
    {
    }

    public function value(): mixed
    {
        return $this->time->format($this::FORMAT);
    }

    public function check(mixed $value): void
    {
        if (is_null($value)) {
            throw new TimeError($value);
        }
    }
}
