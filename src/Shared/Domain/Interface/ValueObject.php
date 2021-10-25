<?php

namespace App\Shared\Domain\Interface;

interface ValueObject
{
    public function value(): mixed;

    public function check(mixed $value): void;
}
