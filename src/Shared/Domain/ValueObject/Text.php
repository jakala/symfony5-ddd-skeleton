<?php
declare(strict_types=1);

use App\Shared\Domain\Interface\ValueObject;

class Text implements ValueObject
{
    public function __construct(private string $value)
    {}

    public function value(): string
    {
        return $this->value;
    }

    public function check(mixed $value): void
    {
    }
}