<?php

declare(strict_types=1);

namespace App\Shared\Domain\Exception;

final class TimeError extends DomainError
{
    public function message(): string
    {
        return sprintf(
            "Expected Time object, '%s' returned",
            $this->value
        );
    }
}
