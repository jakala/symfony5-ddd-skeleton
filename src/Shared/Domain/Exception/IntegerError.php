<?php
declare(strict_types=1);

namespace App\Shared\Domain\Exception;

final class IntegerError extends DomainError
{
    public function message(): string
    {
        return sprintf(
            "Expected Integer value, '%s' returned.",
            $this->value
        );
    }
}