<?php

declare(strict_types=1);

namespace App\Shared\Domain\Exception;

final class TextError extends DomainError
{
    public function message(): string
    {
        return sprintf(
            "Expected Text value, '%s' returned.",
            $this->value
        );
    }
}
