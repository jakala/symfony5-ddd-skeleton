<?php

declare(strict_types=1);

use App\Shared\Domain\Exception\IntegerError;
use App\Shared\Domain\Interface\ValueObject;

class Number implements ValueObject
{
    private int $value;

    public function __construct(?int $value)
    {
        $this->check($value);
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    public function check(mixed $value): void
    {
        if (is_null($value)) {
            throw new IntegerError($value);
        }
    }
}
